<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategorieModel;
use App\Models\AnnonceModel;
use App\Models\UserModel;

// Controleur de la page d'accueil

class Home extends BaseController {

	public $categoriesModel = null ;

	public $annoncesModel = null ;

	public $usersModel = null ;

	public function __construct() {

		$this->categoriesModel = new CategorieModel();

		$this->annoncesModel = new AnnonceModel();

		$this->usersModel = new UserModel();

	}

	public function index($idCat=null) {

		//fonction qui selectionne toutes les catégories et toutes les annonces

		$annonceParCategorie = $this->annoncesModel->orderBy('IDAnnonce','DESC')->paginate(3);

			if (!empty($idCat)) {

				$annonceParCategorie = $this->annoncesModel->where('IDCat',$idCat)->orderBy('IDAnnonce','DESC')->paginate(3);

			}

		$listCategories = $this->categoriesModel->findAll();

		$listAnnonces = $this->annoncesModel->orderBy('TitreAnnonce','ASC')->findAll();
		
		$data = [
			'tabCategories' => $listCategories,
			'tabAnnonces'	=> $annonceParCategorie,
			'pager' => $this->annoncesModel->pager,
			'usersModel' => $this->usersModel,
			'categoriesModel' => $this->categoriesModel,
		];

		echo view('common/header',$data);
		echo view('index',$data);
		echo view('common/footer');
	}
}

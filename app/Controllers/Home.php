<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategorieModel;
use App\Models\AnnonceModel;
use App\Models\UserModel;

class Home extends BaseController {

	public $categoriesModel = null ;

	public $annoncesModel = null ;

	public $usersModel = null ;

	public function __construct() {

		$this->categoriesModel = new CategorieModel();

		$this->annoncesModel = new AnnonceModel();

		$this->usersModel = new UserModel();

	}

	public function index() {

		$listCategories = $this->categoriesModel->findAll();

		$listAnnonces = $this->annoncesModel->orderBy('TitreAnnonce','ASC')->findAll();

		$data = [
			'tabCategories' => $listCategories,
			'tabAnnonces'	=> $listAnnonces,
			'usersModel' => $this->usersModel,
			'categoriesModel' => $this->categoriesModel,
		];

		echo view('common/header',$data);
		echo view('index',$data);
		echo view('common/footer');
	}
}

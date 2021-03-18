<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AnnonceModel;
use App\Models\CategorieModel;
use App\Models\UserModel;
 
class Annonce extends BaseController {

	public $categoriesModel = null ;

	public $annoncesModel = null ;

	public $usersModel = null ;

	public function __construct() {

		$this->categoriesModel = new CategorieModel();

		$this->annoncesModel = new AnnonceModel();

		$this->usersModel = new UserModel();

	}

    public function index() {

		$listAnnonces = $this->annoncesModel->orderBy('TitreAnnonce','ASC')->findAll();

		$listCategories = $this->categoriesModel->findAll();

		$listUsers = $this->usersModel->findAll();

		$data = [
			'tabCategories' => $listCategories,
			'tabAnnonces'	=> $listAnnonces,
			'tabUsers'	=> $listUsers,
			'usersModel' => $this->usersModel,
			'categoriesModel' => $this->categoriesModel,
		];

        echo view('common/header');
        echo view('newannonce',$data);
        echo view('common/footer');

    }
	
	public function createAnnonce() {
        
        helper(['form']);
        
        $rules = [
            'categorie'      => 'required',
            'titre'          => 'required|min_length[3]|max_length[20]',
            'description'    => 'required|min_length[6]|max_length[150]',
			'auteur'		 => 'required',
			'prix'      	 => 'required',
        ];
         
            if($this->validate($rules)) {

                $model = new AnnonceModel();

                $data = [
                    'IDCat'     => $this->request->getVar('categorie'),
                    'TitreAnnonce'    => $this->request->getVar('titre'),
					'DescriptionAnnonce'    => $this->request->getVar('description'),
					'IDUser'    => $this->request->getVar('auteur'),
                    'ImageAnnonce'    => $this->request->getVar('image'),
					'PrixAnnonce'    => $this->request->getVar('prix'),
                ];

                $model->save($data);

                return redirect()->to('home');

            } else {
                
                $data['validation'] = $this->validator;
                
                echo view('common/header');
                echo view('newannonce', $data);
                echo view('common/footer');

            }
         
    }

	public function editAnnonce($id = null,$idCat = null,$idUser = null) {

		$listAnnonces = $this->annoncesModel->findAll();

		$listCategories = $this->categoriesModel->findAll();

		$listUsers = $this->usersModel->findAll();

		$annonce = $this->annoncesModel->where('IDAnnonce',$id)->where('IDCat',$idCat)->where('IDUser',$idUser)->first();

		$rules = [
            'categorie'      => 'required',
            'titre'          => 'required|min_length[3]|max_length[20]',
            'description'    => 'required|min_length[6]|max_length[150]',
			'auteur'		 => 'required',
			'prix'      	 => 'required',
        ];

		if($this->validate($rules)) {

			$datasave = [
				'IDCat'     => $this->request->getVar('categorie'),
				'TitreAnnonce'    => $this->request->getVar('titre'),
				'DescriptionAnnonce'    => $this->request->getVar('description'),
				'IDUser'    => $this->request->getVar('auteur'),
				'ImageAnnonce'    => $this->request->getVar('image'),
				'PrixAnnonce'    => $this->request->getVar('prix'),
			];

			$annonce = $this->annoncesModel->where('IDAnnonce',$id)->where('IDCat',$idCat)->where('IDUser',$idUser)->set($datasave)->update();

			

		$data = [
			'tabCategories' => $listCategories,
			'tabAnnonces'	=> $listAnnonces,
			'tabUsers'	=> $listUsers,
			'usersModel' => $this->usersModel,
			'categoriesModel' => $this->categoriesModel,
			'annonce'		  => $annonce
		];

		return redirect()->to('/home');

	}

		

		echo view('common/header',$data);
        echo view('editannonce',$data);
		echo view('common/footer');

		
	}

 
}
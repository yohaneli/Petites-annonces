<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AnnonceModel;
use App\Models\CategorieModel;
use App\Models\UserModel;

/*

controleur qui gère les annonces , il les selectionnes,les crées, les supprimes et en selectionne une

*/
 
class Annonce extends BaseController {

	//instanciation variable constructeurs modeles

	public $categoriesModel = null ;

	public $annoncesModel = null ;

	public $usersModel = null ;

	public function __construct() {

		//constructeurs modèles

		$this->categoriesModel = new CategorieModel();

		$this->annoncesModel = new AnnonceModel();

		$this->usersModel = new UserModel();

	}

    public function index() {

		//fonction qui listes les annonces

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

		//fonction qui crée une annonce
        
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

				$file = $this->request->getFile('image');

				$newName = $file->getRandomName();

					if ($newName) {

						$file->move(ROOTPATH.'/public/images/imagesannonces', $newName) ;

						$data['ImageAnnonce'] = $newName ;

						$image = \Config\Services::image()
													->withFile(ROOTPATH.'/public/images/imagesannonces/'.$newName)
													->fit(300, 300, 'center')
													->save(ROOTPATH.'/public/images/images500/'.$newName);

					}

                $model->save($data);

                return redirect()->to('/home');

            } else {
                
                $data['validation'] = $this->validator;
                
                echo view('common/header');
                echo view('newannonce', $data);
                echo view('common/footer');

            }
         
    }

	public function deleteAnnonce($id=null) {

		//fonction qui supprime une annonce

		$annonce = $this->annoncesModel->where('IDAnnonce',$id)->first();

		$this->annoncesModel->where('IDAnnonce',$id)->delete();

		return redirect()->to('/home');

		$data = [
			'annonce'  => $annonce
		];

	}

	public function infosAnnonces($id=null) {

		//fonction qui donne tous les infos sur une annonce

		$listAnnonces = $this->annoncesModel->orderBy('TitreAnnonce','ASC')->findAll();

		$listCategories = $this->categoriesModel->findAll();

		$listUsers = $this->usersModel->findAll();
		
		$annonce = $this->annoncesModel->where('IDAnnonce',$id)->first();

		$data = [
			'tabCategories' => $listCategories,
			'tabAnnonces'	=> $listAnnonces,
			'tabUsers'	=> $listUsers,
			'usersModel' => $this->usersModel,
			'categoriesModel' => $this->categoriesModel,
			'annonce'  => $annonce
		];

		echo view('common/header' , 	$data);
		echo view('detailannonce', $data);
		echo view('common/footer');

	}

	

		
	

 
}
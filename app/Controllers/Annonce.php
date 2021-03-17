<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AnnonceModel;
use App\Models\CategorieModel;
 
class Annonce extends Controller
{
    public function index() {
        
        helper(['form']);

        echo view('common/header');
        echo view('annonce');
        echo view('common/footer');

    }

 
}
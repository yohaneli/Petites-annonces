<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class MonCompte extends Controller
{
    public function index()
    {
        $session = session();

		echo view('common/header');
        echo "Bienvenue , ".$session->get('user_name');
		echo view('common/footer');
    }
}
<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;

//controleur qui gère la connexion d'un utilisateur
 
class Login extends Controller
{
    public function index()
    {
        //fonction qui affiche le formulaire de connexion

        helper(['form']);

        echo view('common/header');
        echo view('login');
        echo view('common/footer');

    } 
 
    public function auth()
    {
        // fonction qui connecte  l'utilisateur

        $session = session();

        $model = new UserModel();

        $email = $this->request->getVar('email');

        $password = $this->request->getVar('password');

        $data = $model->where('user_email', $email)->first();

            if($data) {

                $pass = $data['user_password'];

                $verify_pass = password_verify($password, $pass);

                    if($verify_pass) {

                        $ses_data = [
                            'user_id'       => $data['user_id'],
                            'user_name'     => $data['user_name'],
                            'user_email'    => $data['user_email'],
                            'logged_in'     => TRUE
                        ];
                        
                        $session->set($ses_data);

                        return redirect()->to('/moncompte');

                    } else {

                        $session->setFlashdata('msg', 'Wrong Password');

                        return redirect()->to('/login');

                    }

            } else {

                $session->setFlashdata('msg', 'Email not Found');

                return redirect()->to('/login');

            }

    }
 
    // fonction qui déconnecte

    public function logout()
    {
        
        $session = session();

        $session->destroy();

        return redirect()->to('/login');

    }

} 
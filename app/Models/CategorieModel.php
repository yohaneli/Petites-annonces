<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'categories';
    protected $allowedFields = ['IDCategorie','NomCategorie','IconeCategorie','DateCreationCategorie'];
}
<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'annonces';
    protected $allowedFields = ['IDAnnonce ','IDCat','TitreAnnonce','DescriptionAnnnonce','AuteurAnnonce','ImageAnnonce','PrixAnnonce','DateCreationAnnonce'];
}
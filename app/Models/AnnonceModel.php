<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AnnonceModel extends Model{
    protected $table = 'annonces';
    protected $allowedFields = ['IDAnnonce ','IDCat','TitreAnnonce','DescriptionAnnonce','IDUser','ImageAnnonce','PrixAnnonce','DateCreationAnnonce'];
}
<?php namespace App\Models;

use CodeIgniter\Model;

class iglmodel extends Model
{
    protected $table = 'imglandslide';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image', 'type', 'description'];

}
   

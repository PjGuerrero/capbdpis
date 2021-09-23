<?php namespace App\Models;

use CodeIgniter\Model;

class vglmodel extends Model
{
    protected $table = 'vidlandslide';
    protected $primaryKey = 'id';
    protected $allowedFields = ['video', 'type', 'description'];

}
   

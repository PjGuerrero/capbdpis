<?php namespace App\Models;

use CodeIgniter\Model;

class igtmodel extends Model
{
    protected $table = 'imgtyphoon';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image', 'type', 'description'];

}
   

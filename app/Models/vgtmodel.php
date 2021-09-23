<?php namespace App\Models;

use CodeIgniter\Model;

class vgtmodel extends Model
{
    protected $table = 'vidtyphoon';
    protected $primaryKey = 'id';
    protected $allowedFields = ['video', 'type', 'description'];

}
   

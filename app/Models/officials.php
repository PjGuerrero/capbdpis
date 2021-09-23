<?php namespace App\Models;

use CodeIgniter\Model;

class officials extends Model
{ 
    protected $table = 'tbl_officials';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'position', 'chairmanship', 'contact', 'image'];

}
   

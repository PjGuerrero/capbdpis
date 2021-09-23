<?php namespace App\Models;

use CodeIgniter\Model;

class igfmodel extends Model
{
    protected $table = 'imgflood';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image', 'type', 'description'];

}
   

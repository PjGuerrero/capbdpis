<?php namespace App\Models;

use CodeIgniter\Model;

class vgfmodel extends Model
{
    protected $table = 'vidflood';
    protected $primaryKey = 'id';
    protected $allowedFields = ['video', 'type', 'description'];

}
   

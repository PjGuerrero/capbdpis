<?php namespace App\Models;

use CodeIgniter\Model;

class faqgen extends Model
{ 
    protected $table = 'tbl_faqgen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['number', 'question', 'answer'];

}
   

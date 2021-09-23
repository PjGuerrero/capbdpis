<?php
namespace App\Validation;
use App\Models\UserModel;

class UserRules {

  public function validateUser(string $str, string $fields, array $data){
    $model = new UserModel();
    $tbl_admin = $model->where('email', $data['email'])
                  ->first();

    if(!$tbl_admin)
      return false;

    return password_verify($data['password'], $tbl_admin['password']);
  }
}

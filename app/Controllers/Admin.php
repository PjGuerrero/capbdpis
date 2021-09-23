<?php

namespace App\Controllers;
use App\Models\UserModel;

class Admin extends BaseController
{
	// User Session
	private function setUserSession($tbl_admin)
		{
				$data = [
					'id' => $tbl_admin['id'],
					'firstname' => $tbl_admin['firstname'],
					'lastname' => $tbl_admin['lastname'],
					'email' => $tbl_admin['email'],
					'isLoggedIn' => true,
				];

				session()->set($data);
				return true; 
		}

	// User Login
	public function login()
	{
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post'){

			$rules = [
					'email' => 'min_length[6]|max_length[50]|valid_email',
					'password' => 'min_length[4]|max_length[255]|validateUser[email,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match!'
				]
			];

			if (! $this->validate($rules, $errors)) {
					$data['validation'] = $this->validator;
			}else{
					$model = new UserModel();

					$tbl_admin = $model->where('email', $this->request->getVar('email'))
												 ->first();
					$this->setUserSession($tbl_admin);
					return redirect()->to('/dashboard');
			}
	}
		echo view('Admin/templates/headerlogin', $data);
		echo view('Admin/login');
		echo view('Admin/templates/footer');
	}

	// User Registration
    public function register()
	{
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post'){

						$rules = [
                'firstname' => 'min_length[2]|max_length[20]',
                'lastname' => 'min_length[3]|max_length[20]',
                'email' => 'min_length[6]|max_length[50]|valid_email|is_unique[tbl_admin.email]',
                'password' => 'min_length[4]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{
                $model = new UserModel();

                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];

                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('/login');

            }
        }

		echo view('Admin/templates/headerlogin', $data);
		echo view('Admin/register');
		echo view('Admin/templates/footer');
	}

	// User Logout
	public function logout()
		{
			session()->destroy();
			return redirect()->to('/login');
		}

	// Dashboard
    public function dashboard()
	{
		$usermodel = new UserModel();
		$data['tbl_admin'] = $usermodel;

		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/header', $data);
		echo view('Admin/dashboard', $data);
		echo view('Admin/templates/footer');
	}

	// Maps
	public function maps()
	{
		$data = [];
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		
        echo view('Admin/templates/header', $data);
		echo view('Admin/maps', $data);
		echo view('Admin/templates/footer', $data);
	}

	public function users()
	{
		$usermodel = new UserModel();
		$data['tbl_admin'] = $usermodel->findAll();

		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		
        echo view('Admin/templates/header', $data);
		echo view('Admin/Users/users', $data);
		echo view('Admin/templates/footer', $data);
	}

	
}

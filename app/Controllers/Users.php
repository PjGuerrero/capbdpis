<?php

namespace App\Controllers;
use App\Models\igfmodel;
use App\Models\iglmodel;
use App\Models\igtmodel;

use App\Models\vgfmodel;
use App\Models\vglmodel;
use App\Models\vgtmodel;

use App\Models\officials;

use App\Models\faqgen;

class Users extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('index');
		echo view('templates/footer');
	}
    
    public function highriskmap()
	{
		echo view('templates/header');
		echo view('highriskmap');
		echo view('templates/footer');
	}

	public function barangayofficial()
	{
		$retrieve = new officials();
		$data['tbl_officials'] = $retrieve->findAll();

		echo view('templates/header');
		echo view('barangayofficial', $data);
		echo view('templates/footer');
	}

	public function faqs()
	{
		$retrieve = new faqgen();
		$data['tbl_faqgen'] = $retrieve->findAll();

		echo view('templates/header');
		echo view('faqs', $data);
		echo view('templates/footer');
	}

	public function aboutus()
	{
		echo view('templates/header');
		echo view('aboutus');
		echo view('templates/footer');
	}


	public function contact()
	{
		echo view('templates/header');
		echo view('contact');
		echo view('templates/footer');
	}

	public function videoguides()
	{
		$retrieve = new vgfmodel();
		$data['vidflood'] = $retrieve->findAll();

		$retl = new vglmodel();
		$data['vidlandslide'] = $retl->findAll();

		$rett = new vgtmodel();
		$data['vidtyphoon'] = $rett->findAll();
		
		echo view('templates/header');
		echo view('videoguides', $data);
		echo view('templates/footer');
	}

	public function imageguides()
	{
		$retrieve = new igfmodel();
		$data['imgflood'] = $retrieve->findAll();

		$retl = new iglmodel();
		$data['imglandslide'] = $retl->findAll();

		$rett = new igtmodel();
		$data['imgtyphoon'] = $rett->findAll();


		echo view('templates/header');
		echo view('imageguides', $data);
		echo view('templates/footer');

		
	}

	// public function login()
	// {
	// 	$data = [];
	// 	helper(['form']);

	// 	if ($this->request->getMethod() == 'post'){

	// 		$rules = [
	// 				'email' => 'min_length[6]|max_length[50]|valid_email',
	// 				'password' => 'min_length[8]|max_length[255]|validateUser[email,password]',
	// 		];

	// 		$errors = [
	// 			'password' => [
	// 				'validateUser' => 'Email or Password don\'t match!'
	// 			]
	// 		];

	// 		if (! $this->validate($rules, $errors)) {
	// 				$data['validation'] = $this->validator;
	// 		}else{
	// 				$model = new UserModel();

	// 				$tbl_admin = $model->where('email', $this->request->getVar('email'))
	// 											 ->first();

	// 				$this->setUserSession($tbl_admin);

	// 				return redirect()->to('dashboard');

	// 		}
	// }

	// 	echo view('templates/header', $data);
	// 	echo view('Accounts/login');
			
	// }

	// private function setUserSession($tbl_admin)
	// 	{
	// 			$data = [
	// 				'id' => $tbl_admin['id'],
	// 				'firstname' => $tbl_admin['firstname'],
	// 				'lastname' => $tbl_admin['lastname'],
	// 				'email' => $tbl_admin['email'],
	// 				'isLoggedIn' => true,
	// 			];

	// 			session()->set($data);
	// 			return true;
	// 	}


	// public function register()
	// {
	// 	$data = [];
	// 	helper(['form']);

	// 	if ($this->request->getMethod() == 'post'){

	// 					$rules = [
    //             'firstname' => 'min_length[2]|max_length[20]',
    //             'lastname' => 'min_length[3]|max_length[20]',
    //             'email' => 'min_length[6]|max_length[50]|valid_email|is_unique[tbl_admin.email]',
    //             'password' => 'min_length[8]|max_length[255]',
    //             'password_confirm' => 'matches[password]',
    //         ];

    //         if (! $this->validate($rules)) {
    //             $data['validation'] = $this->validator;
    //         }else{
    //             $model = new UserModel();

    //             $newData = [
    //                 'firstname' => $this->request->getVar('firstname'),
    //                 'lastname' => $this->request->getVar('lastname'),
    //                 'email' => $this->request->getVar('email'),
    //                 'password' => $this->request->getVar('password'),
    //             ];

    //             $model->save($newData);
    //             $session = session();
    //             $session->setFlashdata('success', 'Successful Registration');
    //             return redirect()->to('/login');

    //         }
    //     }

	// 	echo view('templates/header', $data);
	// 	echo view('Accounts/register');

	// }

	// public function dashboard()
	// {
    //     echo view('templates/header');
	// 	echo view('dashboard');
	// 	echo view('templates/footer');
	// }

	// public function logout()
	// 	{
	// 		session()->destroy();
	// 		return redirect()->to('/');
	// 	}
}

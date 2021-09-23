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

class AdminGuides extends BaseController
{
	// FAQs Generator
	public function faqgenerator()
	{
		$retrieve = new faqgen();
		$data['tbl_faqgen'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/headerlogin', $data);
		echo view('Admin/templates/header', $data);
		echo view('Admin/faqgenerator', $data);
		echo view('Admin/templates/footer', $data);
	}
	// FAQs Upload
    public function faqsupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$faqs = new faqgen();

			$data = [
				"number" => $this->request->getVar("number"),
				"question" => $this->request->getVar("question"),
				"answer" => $this->request->getVar("answer"),
				];
		
			$faqs->insert($data);

			return redirect()->to(previous_url())->with('status', 'FAQs Successfully Uploaded');	

		}else{	
			return redirect()->to(previous_url())->with('status-error', 'Error on Uploading');
			
		}
	}

	// FAQs Delete
    public function faqsdel($id)
	{
		$del = new faqgen();
		$data = $del->find($id);

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}


	// FAQs Edit
    public function faqsedit($id)
	{

		if ($this->request->getMethod() == "post") 
		{
			$faqs = new faqgen();
			$faqs->find($id);
			$data = [
				"number" => $this->request->getVar("number"),
				"question" => $this->request->getVar("question"),
				"answer" => $this->request->getVar("answer"),
				];
		
			$faqs->update($id, $data);

			return redirect()->to(previous_url())->with('status', 'FAQs Successfully Edited');	

		}else{	
			return redirect()->to('faqgenerator')->with('status-error', 'Error on Editing');
			
		}
	}

	// Officials
	public function officials()
	{
		$retrieve = new officials();
		$data['tbl_officials'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/header', $data);
		echo view('Admin/Officials/BarangayOfficials', $data);
		echo view('Admin/templates/footer', $data);
	}

	// Officials Upload
    public function offupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$file = $this->request->getFile("image");
			$file_type = $file->getClientMimeType();
			$valid_file_types = array("image/png", "image/jpeg", "image/jpg");

			if (in_array($file_type, $valid_file_types)) 
			{
				$official_image = $file->getRandomName();
				if ($file->move("upload/officials", $official_image)) 
				{
					$official = new officials();

					$data = [
						"name" => $this->request->getVar("name"),
						"position" => $this->request->getVar("position"),
						"chairmanship" => $this->request->getVar("chairmanship"),
						"contact" => $this->request->getVar("number"),
						"image" => "upload/officials/" . $official_image,
                        
                    ];
					$official->insert($data);

					return redirect()->to(previous_url())->with('status', 'Officials Successfully Uploaded');
				}
			}else{
				return redirect()->to(previous_url())->with('status', 'Filetype is not Supported');
			}
		}
	}


	// Officials Delete

	public function deleteoff($id) 
	{
	
		$del = new officials();
		$data = $del->find($id);
		$imgfile = $data['image'];
		
		if(file_exists($imgfile))
		{
			unlink($imgfile);
		}

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}


	// Official Edit
    public function editoff($id)
	{

		$official = new officials();
		$officialimage = $official->find($id);
		$oldimage = $officialimage['image'];

		$file = $this->request->getFile("image");
		if($file->isValid() && !$file->hasMoved())
		{
			if(file_exists($oldimage))
			{
				unlink($oldimage);
				
			}
		}
		
		$official_image = $file->getRandomName();
		$file->move("upload/officials/", $official_image);
		
			$data = [
				"name" => $this->request->getVar("name"),
				"position" => $this->request->getVar("position"),
				"chairmanship" => $this->request->getVar("chairmanship"),
				"contact" => $this->request->getVar("number"),
				"image" =>  "upload/officials/".$official_image,
			];
			$official->update($id, $data);
			return redirect()->to(previous_url())->with('status', 'Successfully Updated');	
	}


	// Image
	public function igflood()
	{
		$retrieve = new igfmodel();
		$data['imgflood'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/headerlogin', $data); 
        echo view('Admin/templates/header', $data);
		echo view('Admin/ImageGuides/IGflood', $data);
		echo view('Admin/templates/footer', $data);
	}

	public function iglandslide()
	{
		$retrieve = new iglmodel();
		$data['imglandslide'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/headerlogin', $data);
        echo view('Admin/templates/header', $data);
		echo view('Admin/ImageGuides/IGlandslide', $data);
		echo view('Admin/templates/footer', $data);
	}

	public function igtyphoon()
	{
		$retrieve = new igtmodel();
		$data['imgtyphoon'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/headerlogin', $data);
        echo view('Admin/templates/header', $data);
		echo view('Admin/ImageGuides/IGtyphoon', $data);
		echo view('Admin/templates/footer', $data);
	}


	// Image Upload
    public function igfupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$file = $this->request->getFile("image");
			$file_type = $file->getClientMimeType();
			$valid_file_types = array("image/png", "image/jpeg", "image/jpg");

			if (in_array($file_type, $valid_file_types)) 
			{
				$disaster_image = $file->getRandomName();
				if ($file->move("upload/igfimages", $disaster_image)) 
				{
					$igf = new igfmodel();

					$data = [
						"image" => "upload/igfimages/" . $disaster_image,
                        "type" => $this->request->getVar("type"),
                        "description" => $this->request->getVar("description"),
                    ];
					$igf->insert($data);

					return redirect()->to(previous_url())->with('status', 'Successfully Uploaded');
				}
			}else{
				return redirect()->to(previous_url())->with('status-error', 'Filetype is not Supported');
			}
		}
	}

	public function iglupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$file = $this->request->getFile("image");
			$file_type = $file->getClientMimeType();
			$valid_file_types = array("image/png", "image/jpeg", "image/jpg");

			if (in_array($file_type, $valid_file_types)) 
			{
				$disaster_image = $file->getRandomName();
				if ($file->move("upload/iglimages", $disaster_image)) 
				{
					$igl = new iglmodel();

					$data = [
						"image" => "upload/iglimages/" . $disaster_image,
                        "type" => $this->request->getVar("type"),
                        "description" => $this->request->getVar("description"),
                    ];
					$igl->insert($data);

					return redirect()->to(previous_url())->with('status', 'Successfully Uploaded');
				}
			}else{
				return redirect()->to(previous_url())->with('status-error', 'Filetype is not Supported');
			}
		}
	}

	public function igtupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$file = $this->request->getFile("image");
			$file_type = $file->getClientMimeType();
			$valid_file_types = array("image/png", "image/jpeg", "image/jpg");

			if (in_array($file_type, $valid_file_types)) 
			{
				$disaster_image = $file->getRandomName();
				if ($file->move("upload/igtimages", $disaster_image)) 
				{
					$igt= new igtmodel();

					$data = [
						"image" => "upload/igtimages/" . $disaster_image,
                        "type" => $this->request->getVar("type"),
                        "description" => $this->request->getVar("description"),
                    ];
					$igt->insert($data);

					return redirect()->to(previous_url())->with('status', 'Successfully Uploaded');
				}
			}else{
				return redirect()->to(previous_url())->with('status-error', 'Filetype is not Supported');
			}
		}
	}


	// Image Delete
	public function deleteigf($id) 
	{
	
		$del = new igfmodel();
		$data = $del->find($id);
		$imgfile = $data['image'];
		
		if(file_exists($imgfile))
		{
			unlink($imgfile);
		}

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}

	public function deleteigl($id) 
	{
	
		$del = new iglmodel();
		$data = $del->find($id);
		$imgfile = $data['image'];
		
		if(file_exists($imgfile))
		{
			unlink($imgfile);
		}

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}

	public function deleteigt($id) 
	{
	
		$del = new igtmodel();
		$data = $del->find($id);
		$imgfile = $data['image'];
		
		if(file_exists($imgfile))
		{
			unlink($imgfile);
		}

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}


	// Image Edit
    public function igfedit($id)
	{

		$igf = new igfmodel();
		$igfimage = $igf->find($id);
		$oldimage = $igfimage['image'];

		$file = $this->request->getFile("image");
		if($file->isValid() && !$file->hasMoved())
		{
			if(file_exists($oldimage))
			{
				unlink($oldimage);
				
			}
		}
		 
		$disaster_image = $file->getRandomName();
		$file->move("upload/igfimages/", $disaster_image);
		
			$data = [
				"image" =>  "upload/igfimages/".$disaster_image,
				"type" => $this->request->getVar("type"),
				"description" => $this->request->getVar("description"),
			];
			$igf->update($id, $data);
			return redirect()->to(previous_url())->with('status', 'Successfully Updated');	
	}

	public function igledit($id)
	{

		$igl = new iglmodel();
		$iglimage = $igl->find($id);
		$oldimage = $iglimage['image'];

		$file = $this->request->getFile("image");
		if($file->isValid() && !$file->hasMoved())
		{
			if(file_exists($oldimage))
			{
				unlink($oldimage);
				
			}
		}
		
		$disaster_image = $file->getRandomName();
		$file->move("upload/iglimages/", $disaster_image);
		
			$data = [
				"image" =>  "upload/iglimages/".$disaster_image,
				"type" => $this->request->getVar("type"),
				"description" => $this->request->getVar("description"),
			];
			$igt->update($id, $data);
			return redirect()->to(previous_url())->with('status', 'Successfully Updated');
	}

	public function igtedit($id)
	{
		$igt = new igtmodel();
		$igtimage = $igt->find($id);
		$oldimage = $igtimage['image'];

		$file = $this->request->getFile("image");
		if($file->isValid() && !$file->hasMoved())
		{
			if(file_exists($oldimage))
			{
				unlink($oldimage);
				
			}
		}
		
		$disaster_image = $file->getRandomName();
		$file->move("upload/igtimages/", $disaster_image);
		
			$data = [
				"image" =>  "upload/igtimages/".$disaster_image,
				"type" => $this->request->getVar("type"),
				"description" => $this->request->getVar("description"),
			];
			$igt->update($id, $data);
			return redirect()->to(previous_url())->with('status', 'Successfully Updated');		
	}





	
	// Video
	public function vgflood()
	{
		$retrieve = new vgfmodel();
		$data['vidflood'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/headerlogin', $data);
        echo view('Admin/templates/header', $data);
		echo view('Admin/VideoGuides/VGflood', $data);
		echo view('Admin/templates/footer', $data);
	}

	public function vglandslide()
	{
		$retrieve = new vglmodel();
		$data['vidlandslide'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/headerlogin', $data);
        echo view('Admin/templates/header', $data);
		echo view('Admin/VideoGuides/VGlandslide', $data);
		echo view('Admin/templates/footer', $data);
	}

	public function vgtyphoon()
	{
		$retrieve = new vgtmodel();
		$data['vidtyphoon'] = $retrieve->findAll();
		if(!session()->get('isLoggedIn'))
		redirect()->to('/login');

		echo view('Admin/templates/headerlogin', $data);
        echo view('Admin/templates/header', $data);
		echo view('Admin/VideoGuides/VGtyphoon', $data);
		echo view('Admin/templates/footer', $data);
	}

	
	// Video Upload
	public function vgfupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$file = $this->request->getFile("video");
			$file_type = $file->getClientMimeType();
			$valid_file_types = array("video/mp4", "video/avi", "video/flv", "video/3gp");

			if (in_array($file_type, $valid_file_types)) 
			{
				$disaster_video = $file->getRandomName();
				if ($file->move("upload/vgfvids", $disaster_video)) 
				{
					$videoupload = new vgfmodel();

					$data = [
						"video" => "upload/vgfvids/" . $disaster_video,
                        "type" => $this->request->getVar("type"),
                        "description" => $this->request->getVar("description"),
                    ];
					$videoupload->insert($data);

					return redirect()->to(previous_url())->with('status', 'Successfully Uploaded');
				}
			}else{
				return redirect()->to(previous_url())->with('status-error', 'Filetype is not Supported');
			}
		}
	}

	public function vglupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$file = $this->request->getFile("video");
			$file_type = $file->getClientMimeType();
			$valid_file_types = array("video/mp4", "video/avi", "video/flv", "video/3gp");

			if (in_array($file_type, $valid_file_types)) 
			{
				$disaster_video = $file->getRandomName();
				if ($file->move("upload/vglvids", $disaster_video)) 
				{
					$videoupload = new vglmodel();

					$data = [
						"video" => "upload/vglvids/" . $disaster_video,
                        "type" => $this->request->getVar("type"),
                        "description" => $this->request->getVar("description"),
                    ];
					$videoupload->insert($data);

					return redirect()->to(previous_url())->with('status', 'Successfully Uploaded');
				}
			}else{
				return redirect()->to(previous_url())->with('status-error', 'Filetype is not Supported');
			}
		}
	}


	public function vgtupload()
	{
		if ($this->request->getMethod() == "post") 
		{
			$file = $this->request->getFile("video");
			$file_type = $file->getClientMimeType();
			$valid_file_types = array("video/mp4", "video/avi", "video/flv", "video/3gp");

			if (in_array($file_type, $valid_file_types)) 
			{
				$disaster_video = $file->getRandomName();
				if ($file->move("upload/vgtvids", $disaster_video)) 
				{
					$videoupload = new vgtmodel();

					$data = [
						"video" => "/upload/vgtvids/" . $disaster_video,
                        "type" => $this->request->getVar("type"),
                        "description" => $this->request->getVar("description"),
                    ];
					$videoupload->insert($data);

					return redirect()->to(previous_url())->with('status', 'Successfully Uploaded');
				}
			}else{
				return redirect()->to(previous_url())->with('status-error', 'Filetype is not Supported');
			}
		}
	}

	// Video Delete
	public function deletevgf($id) 
	{
	
		$del = new vgfmodel();
		$data = $del->find($id);
		$vidfile = $data['video'];
		
		if(file_exists($vidfile))
		{
			unlink($vidfile);
		}

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}

	public function deletevgl($id) 
	{
	
		$del = new vglmodel();
		$data = $del->find($id);
		$vidfile = $data['video'];
		
		if(file_exists($vidfile))
		{
			unlink($vidfile);
		}

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}

	public function deletevgt($id) 
	{
	
		$del = new vgtmodel();
		$data = $del->find($id);
		$vidfile = $data['video'];
		
		if(file_exists($vidfile))
		{
			unlink($vidfile);
		}

		$del->delete($id);
		return redirect()->to(previous_url())->with('status', 'Successfully Deleted');
	}

	// Video Edit
    public function vgfedit($id)
	{
		$vgf = new vgfmodel();
		$vgfvideo = $vgf->find($id);
		$oldvideo = $vgfvideo['video'];

		$file = $this->request->getFile("video");
		if($file->isValid() && !$file->hasMoved())
		{
			if(file_exists($oldvideo))
			{
				unlink($oldvideo);
				
			}
		}
		
		$disaster_video = $file->getRandomName();
		$file->move("upload/vgfvids/", $disaster_video);
		
			$data = [
				"video" =>  "upload/vgfvids/".$disaster_video,
				"type" => $this->request->getVar("type"),
				"description" => $this->request->getVar("description"),
			];
			$vgf->update($id, $data);
			return redirect()->to(previous_url())->with('status', 'Successfully Updated');		
	}

	public function vgledit($id)
	{
		$vgl = new vglmodel();
		$vglvideo = $vgl->find($id);
		$oldvideo = $vglvideo['video'];

		$file = $this->request->getFile("video");
		if($file->isValid() && !$file->hasMoved())
		{
			if(file_exists($oldvideo))
			{
				unlink($oldvideo);
				
			}
		}
		
		$disaster_video = $file->getRandomName();
		$file->move("upload/vglvids/", $disaster_video);
		
			$data = [
				"video" =>  "upload/vglvids/".$disaster_video,
				"type" => $this->request->getVar("type"),
				"description" => $this->request->getVar("description"),
			];
			$vgl->update($id, $data);
			return redirect()->to(previous_url())->with('status', 'Successfully Updated');		
	}

	public function vgtedit($id)
	{
		$vgt = new vgtmodel();
		$vgtvideo = $vgt->find($id);
		$oldvideo = $vgtvideo['video'];

		$file = $this->request->getFile("video");
		if($file->isValid() && !$file->hasMoved())
		{
			if(file_exists($oldvideo))
			{
				unlink($oldvideo);
				
			}
		}
		
		$disaster_video = $file->getRandomName();
		$file->move("upload/vgtvids/", $disaster_video);
		
			$data = [
				"video" =>  "upload/vgtvids/".$disaster_video,
				"type" => $this->request->getVar("type"),
				"description" => $this->request->getVar("description"),
			];
			$vgt->update($id, $data);
			return redirect()->to(previous_url())->with('status', 'Successfully Updated');		
	}
	
}

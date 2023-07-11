<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    // function __construct(){
    //     parent::__construct();
	// 	$this->load->Model('Data');
    //     $this->isLogin = $this->session->userdata('isLogin');

    // }



	public function header()
	{
        $data['profile'] = $this->Data->get_profile();
		$this->load->view('admin/template/header', $data);
	}

    public function footer()
	{
		$this->load->view('admin/template/footer');
	}

    public function login()
    {
        $this->load->view('admin/login_page');
    }

	public function dashboard()
	{
		$this->header();
		$this->load->view('admin/index');
		$this->footer();
	}

    public function profile()
	{
        $data['profile'] = $this->Data->get_profile();
        $this->header();
		$this->load->view('admin/index', $data);
        $this->footer();
        
	}

    // Profile Details Adding

    public function add_profile()
    {
        $id = $this->input->post('proid');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $fb = $this->input->post('fb');
        $insta = $this->input->post('insta');
        $twitter = $this->input->post('twitter');
        if (!empty($_FILES['logo']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] ='gif|jpg|png';
			// $config['encrypt_name']  = TRUE;
		

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('logo'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$logo = $this->upload->data();
					$data['logo']=$logo['file_name'];
                    $this->Data->profile_input($data,$id);
					
			}

		}

        if (!empty($_FILES['footer_logo']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] ='gif|jpg|png';
			// $config['encrypt_name']  = TRUE;
		

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('footer_logo'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$logo = $this->upload->data();
					$data['footer_logo']=$logo['file_name'];
                    $this->Data->profile_input($data,$id);
					
			}

		}

        $data = array(
            'email'=> $email,
            'phone' => $phone,
            'address' => $address,
            'fb' => $fb,
            'insta' => $insta,
            'twitter' => $twitter
        );
        $this->Data->profile_input($data, $id);
        redirect("admin/profile");
    }

	public function service()
	{
		$data['service'] = $this->Data->get_service();
		$this->header();
		$this->load->view('admin/service', $data);
		$this->footer();
	}

	public function add_service($id = '')
	{
		$this->header();
		$service = $this->Data->get_service_by_id($id);
		$data['service'] = $service;
		$this->load->view('admin/add_service', $data);
		$this->footer();
	}

	public function service_added()
	{
		$id = $this->input->post('proid');
		$sr_no = $this->input->post('sr_no');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$image='';
		if (!empty($_FILES['image']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['encrypt_name']  = TRUE;

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$image = $this->upload->data();
					$data['image']=$image['file_name'];
                    // $this->Data->teaminput($data,$id);
			}

		}

		$data = array(
			'sr_no' => $sr_no,
			'title' => $title,
			'description' => $description,
			'image' => isset($image['file_name'])?$image['file_name']:''

		);
		$this->Data->service_input($data, $id);
		redirect('admin/service');
	}

	public function delete_service($id)
	{
		$this->load->model('Data');
		$this->Data->delete_service($id);
		$this->session->set_flashdata('success_msg', 'Deleted successfully');
		redirect('admin/service');
	}


	public function project()
	{
		$data['project'] = $this->Data->get_project();
		$this->header();
		$this->load->view('admin/project', $data);
		$this->footer();
	}

	public function add_project($id = '')
	{
		$this->header();
		$project = $this->Data->get_project_by_id($id);
		$data['project'] = $project;
		$this->load->view('admin/add_project', $data);
		$this->footer();
	}

	public function project_added()
	{
		$id = $this->input->post('proid');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$image='';
		if (!empty($_FILES['image']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['encrypt_name']  = TRUE;

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$image = $this->upload->data();
					$data['image']=$image['file_name'];
                    // $this->Data->teaminput($data,$id);
			}

		}

		$data = array(
			'title' => $title,
			'address' => $description,
			'image' => isset($image['file_name'])?$image['file_name']:''
		);
		$this->Data->project_input($data, $id);
		redirect('admin/project');
	}

	public function delete_project($id)
	{
		$this->load->model('Data');
		$this->Data->delete_project($id);
		$this->session->set_flashdata('success_msg', 'Deleted successfully');
		redirect('admin/project');
	}


	// Blogs management

	public function blog()
	{
		$data['blog'] = $this->Data->get_blog();
		$this->header();
		$this->load->view('admin/blog', $data);
		$this->footer();
	}

	public function add_blog($id = '')
	{
		$this->header();
		$blog = $this->Data->get_blog_by_id($id);
		$data['blog'] = $blog;
		$this->load->view('admin/add_blog', $data);
		$this->footer();
	}

	public function blog_added()
	{
		$id = $this->input->post('proid');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$date = $this->input->post('blog_date');
		$author = $this->input->post('blog_author');
		$image='';
		if (!empty($_FILES['image']['name'])) {

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['encrypt_name']  = TRUE;

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = $this->upload->display_errors();

					echo $error;
					echo $config['upload_path'];
			}
			else
			{
					$image = $this->upload->data();
					$data['image']=$image['file_name'];
                    // $this->Data->teaminput($data,$id);
			}

		}

		$data = array(
			'title' => $title,
			'description'=> $description,
			'date' => $date,
			'author' => $author,
			'image' => isset($image['file_name'])?$image['file_name']:''
		);
		$this->Data->blog_input($data, $id);
		redirect('admin/blog');
	}

	public function delete_blog($id)
	{
		$this->load->model('Data');
		$this->Data->delete_blog($id);
		$this->session->set_flashdata('success_msg', 'Deleted successfully');
		redirect('admin/blog');
	}


}

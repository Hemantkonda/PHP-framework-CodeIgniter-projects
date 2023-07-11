<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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


     public function check_login()
     {
         $this->load->library('form_validation');
     
         // Set validation rules
         $this->form_validation->set_rules('user', 'Username', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
     
         if ($this->form_validation->run() == FALSE) {
             // Validation failed, show error messages
             $this->session->set_flashdata('error', validation_errors());
             redirect('admin');
         } else {
             // Validation passed, proceed with login check
             $user = $this->input->post('user');
             $password = $this->input->post('password');
     
             // Assuming you have a model named 'Login' with a method 'login_check' to verify credentials
             $check = $this->Login->login_check($user, $password);
     
             if ($check) {
                 $this->session->set_userdata('type', $check->type);
                 $this->session->set_userdata('id', $check->id);
                 redirect('profile');
             } else {
                 $this->session->set_flashdata('error', 'Invalid username or password');
                 redirect('admin');
             }
         }
     }
     
     
     

        public function logout()
        {
            // $this->session->unset_userdata('isLogin');
            $this->session->unset_userdata('type');
            $this->session->unset_userdata('id');
            $this->session->sess_destroy();
            redirect('admin');
        }
            
        
	
}

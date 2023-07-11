<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {


    // Login input Checking

    // public Function login_check($user, $password)
    // {
    //     $this->db->select('*');
    //     $this->db->from('user_admin');
    //     $this->db->where('user', $user);
    //     $this->db->where('password', $password);
    //     $query = $this->db->get();
    //     return $query->result();
    // }



    // Profile Data

	public function profile_input($data,$id)
	{
        if ($id == '') {

            $this->db->insert('profile',$data);
        }else{
            $this->db->update('profile',$data);
        }
		 
        
	}

    public function get_profile()
    {
        $this->db->select('*');
        $this->db->from('profile');
        $user = $this->db->get();
        return $user->row();
    }
    

    // Service Data

    public function service_input($data, $id)
    {
        if($id == ''){
            $this->db->insert('service', $data);
        }else{
            $this->db->where('id',$id);
            $this->db->update('service', $data);
        }
    }

    public function get_service()
    {
        $this->db->select('*');
        $this->db->from('service');
        $user = $this->db->get();
        return $user->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();

    }

    public function delete_service($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('service');
    }


    // Project Data

    public function project_input($data, $id)
    {
        if($id == ''){
            $this->db->insert('project', $data);
        }else{
            $this->db->where('id', $id);
            $this->db->update('project', $data);
        }
    }

    public function get_project()
    {
        $this->db->select('*');
        $this->db->from('project');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_project_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function delete_project($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('project');
    }
    
    // Blogs Management

    public function blog_input($data, $id)
    {
        if($id == ''){
            $this->db->insert('blog', $data);
        }else{
            $this->db->where('id', $id);
            $this->db->update('blog', $data);
        }
    }

    public function get_blog()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_blog_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function delete_blog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }

}
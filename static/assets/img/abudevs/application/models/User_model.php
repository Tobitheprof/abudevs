<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

 public function __construct()
        {
                $this->load->database();
        }


        
        public function contact_us()
        {

            $data= array(
                'name' => $this->input->post('name'),
                 'email' => $this->input->post('email'),
                  'phone' => $this->input->post('phone'),
                  'subject' => $this->input->post('subject'),
                  'message' => $this->input->post('message')
            );

           
            $this->db->insert('contact_us', $data);
              $name = $this->input->post('name');
            $this->session->set_flashdata('success_contact_save', 'Thank You,<strong>'.$name.'</strong> for your Message.');
        }


         public function check_username_exists($username)
        {
            $this->db->where('regno', $username);
          $query = $this->db->get('tbl_members');
          if ($query->num_rows()>0) {
            return false;
          }else{
            return true;
          }
        }

        public function username_exists($username)
        {
           $this->db->where('regno', $username);
          $query = $this->db->get('members');
          if ($query->num_rows()>0) {
            return true;
          }else{
            return false;
          }
        }


         public function user_info($username)
        {
                  $query = $this->db->query("SELECT * FROM tbl_members where  regno = '$username'");
                         return $query->row_array();  
        }

         public function user_login($username,$pass)
        {
          $this->db->select('*');
       $this->db->where('regno', $username);
        $this->db->where('password', $pass);
        

        $result = $this->db->get('tbl_members');
        if ($result->num_rows()==1) {
          return $result->row(0)->id;
        }else{

          return false;
        }
        }

     

           public function blog_table()
           {
                 $query = $this->db->query("SELECT * FROM blog where blog_type='blog'   ORDER BY id DESC");
               return $query->result_array();
             }

              public function course_table()
           {
                 $query = $this->db->query("SELECT * FROM blog where blog_type='course'  ORDER BY id DESC ");
               return $query->result_array();
             }



                  public function tool_table()
           {
                 $query = $this->db->query("SELECT * FROM blog where blog_type='tool'  ORDER BY id DESC ");
               return $query->result_array();
             }



             public function membership($username)
        {
          $query = $this->db->query("SELECT * FROM tbl_members WHERE regno = '$username'");
           return  $query->row_array();
              
        }

          public function blog_post($slug)
        {
         $query = $this->db->query("SELECT * FROM blog where  slug= '$slug'");
                         return $query->row_array(); 
        }

        public function exco()
        {
          $query = $this->db->query("SELECT * FROM exco");
          return  $query->result_array();
        }

         public function set_department()
        {
          $query = $this->db->query("SELECT * FROM tbl_department");
          return  $query->result_array();
        }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */ ?>
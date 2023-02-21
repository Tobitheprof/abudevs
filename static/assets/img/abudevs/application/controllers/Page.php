<?php 
//<------------------------------------Developer Information------------------------------------->
 // Template MOZField: Adewumi  Adewale 
//Phone Number: +2347031828170
//Company Name: Starcom Emerald Developer Global Enterprise
 //    Description: WEB APPLICATION {M.V.C} Development System.
 //    Author: STARCOM EMERALD DEVELOPER
 //    Version: 1.0

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();

        // $this->tree_change();
        $username ='';
    }


//Render Home Page View 
public function index($page='index')
	{
		 if ( ! file_exists(APPPATH.'views/page/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
              $data['title'] = 'Ahmadu Bello University Developers';
                 $this->load->view('template/header', $data);
			           $this->load->view('page/'.$page, $data);
                    $this->load->view('template/footer', $data);

	}


              public function error()
              {
                 $data['title'] = 'Ahmadu Bello University Developers';
                  $this->load->view('template/header', $data);
                  $this->load->view('page/error', $data);
                  $this->load->view('template/footer', $data);
              }

              public function lab()
              {

                        // $data['departments'] = $this->User_model->set_department();
                         $data['title'] = 'Developers LAB';
                          $data['tools'] = $this->User_model->tool_table();
                           $data['courses'] = $this->User_model->course_table();
                        $this->load->view('template/header', $data);
                        $this->load->view('page/lab', $data);
                        $this->load->view('template/footer', $data);
              }

                public function register()
                {
                       
                        $this->form_validation->set_rules('reg_no', 'Registration Number', 'trim|required|callback_check_username_exists');
                         $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric');
                           $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
                              $this->form_validation->set_rules('first_name', 'Surname', 'trim|required');
                              $this->form_validation->set_rules('last_name', 'Others Name', 'trim|required');
                              $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
                              // $this->form_validation->set_rules('last_name', 'First Name', 'trim|required');
                              $this->form_validation->set_rules('git_url', 'Git Account Url', 'trim');
                              $this->form_validation->set_rules('about', 'About Us', 'trim|required');
                              $this->form_validation->set_rules('department', 'Department', 'trim|required');
                              $this->form_validation->set_rules('tech', 'Tech Oriented', 'trim|required');
                              $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
                               $this->form_validation->set_rules('conpassword', 'Confrim Password', 'trim|matches[password]');


                                    if ($this->form_validation->run()==FALSE) {
                                      // die();
                                      $data['departments'] = $this->User_model->set_department();
                                                  $data['title'] = 'Memeber Registration ';
                                                   $this->load->view('template/header', $data);
                                                  $this->load->view('page/register', $data);
                                                  $this->load->view('template/footer', $data);
                                    } else {
                                      $data = array(
                                          'regno'=>$this->input->post('reg_no'),
                                        'fname'=>$this->input->post('first_name'),
                                        'lname'=>$this->input->post('last_name'),
                                        'email'=>$this->input->post('email'),
                                        'phone'=>$this->input->post('phone'),
                                        'tech'=>$this->input->post('tech'),
                                        'git_url'=>$this->input->post('git_url'),
                                        'about'=>$this->input->post('about'),
                                        'dept'=>$this->input->post('department'),
                                        'gender'=>$this->input->post('gender'),
                                         'password'=>md5($this->input->post('password'))
                                      
                                      );
                                      $this->db->insert('tbl_members', $data);
                                      echo 'Successfully Done';
                                    }

                }

    
                                      public function login()
                                      {

                                          $this->form_validation->set_rules('username', 'Username', 'trim|required');
                               $this->form_validation->set_rules('password', 'Password', 'trim|required');
                            if ($this->form_validation->run() == FALSE) {
                                
                        $data['title'] = 'Login Panel'; // Capitalize the first letter
                             $data['title'] = 'Login Panel';
                             $this->load->view('template/header', $data);
                             $this->load->view('page/login', $data);
                             $this->load->view('template/footer', $data);
                            } else {
                            $username =  strtolower($this->input->post('username'));
                                 $password =  strtolower($this->input->post('password'));
                                 $pass = md5($password);

                          $user_id = $this->User_model->user_login($username,$pass);

                          if ($user_id) {
                            $user_data =array(
                              'user_id' => $user_id,
                              'username' => $username,
                              'password' => $password,
                              'devs_logged_in' => TRUE
                            );
                            $this->session->set_userdata($user_data);
                           $data['title'] = 'Dashboard';
                           
                          // echo '<script>alert("You have succesfully logged In")</script>';
                            redirect('dashboard','refresh',$data);

                          }else{

                    $this->session->set_flashdata("login_failed","Invalid Username or Password");

                                

                        $data['title'] = 'Login Panel'; // Capitalize the first letter
                             $data['title'] = 'Login Panel';
                             $this->load->view('template/header', $data);
                             $this->load->view('page/login', $data);
                             $this->load->view('template/footer', $data);
                            }
                                                                     
                                      }
                                    }


            public function check_username_exists($username)
                      {
                       $this->form_validation->set_message('check_username_exists', 'Registration Number has already register proceed to login');
                    if ($this->User_model->check_username_exists($username)) {
                            return true;
                    }else{
                            return false;
                       }
                  }

                  public function check_guest_exists($username)
                  {
                    $this->form_validation->set_message('check_guest_exists', 'Email Address has already register');
                    if ($this->User_model->check_username_exists($username)) {
                            return true;
                    }else{
                            return false;
                       }
                  }

                   public function username_exists($username)
                      {
                       $this->form_validation->set_message('username_exists', 'Username Already register');
                    if ($this->User_model->username_exists($username)) {
                            return true;
                    }else{
                            return false;
                       }
                  }


                  public function update_account()
                  {
                      $this->form_validation->set_rules('reg_no', 'Registration Number', 'trim|required');
                      $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric');
                      $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
                       $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
                     if ($this->form_validation->run() == FALSE) {
                      $username = $this->input->post('reg_no');
                      $data['student_info'] = $this->User_model->membership($username);
                      $data['departments'] = $this->User_model->set_department();
                                  $data['title'] = 'Memeber Registration ';
                                   $this->load->view('template/header', $data);
                                         $this->load->view('page/reg_validate', $data);
                                      $this->load->view('template/footer', $data);
                    } else {
                          $data = array(
                          // 'regno'=>$this->input->post('reg_no'),
                        'fname'=>$this->input->post('name'),
                        'lname'=>'',
                        'email'=>$this->input->post('email'),
                        'phone'=>$this->input->post('phone'),
                        'status'=>'1',
                         'password'=>md5($this->input->post('password'))
                      );
                          $username = $this->input->post('reg_no');
                          $this->db->where('regno', $username);
                          $this->db->update('tbl_members', $data);
                          $username = $this->input->post('reg_no');
                          $this->confirm($username);
                      
                    }
                  }

                  public function confirm($username)
                  {
                                   $data['title'] = 'Memeber Registration ';
                                   $data['email'] = $username;
                                   $this->load->view('template/header', $data);
                                         $this->load->view('page/confirm', $data);
                                      $this->load->view('template/footer', $data);
                  }


                     public function save($username)
                  {
                                   $data['title'] = 'Memeber Registration ';
                                   $data['email'] = $username;
                                   $this->load->view('template/header', $data);
                                         $this->load->view('page/save', $data);
                                      $this->load->view('template/footer', $data);
                  }


                  public function exco()
                  {
                                   $data['title'] = 'Executive';
                                   $data['materials'] =$this->User_model->exco();
                                   $this->load->view('template/header', $data);
                                         $this->load->view('page/exco', $data);
                                      $this->load->view('template/footer', $data);
                  }

                    // public function post($slug)
                    //     {
                    //        if (empty($slug)|| $this->User_model->blog_post($slug)==false) {
                    //             redirect('Page/error','refresh');
                    //           }

                    //            $data['title'] = 'Services';
                    //          $data['blog'] =   $this->User_model->blog_post($slug); 
                    //         $this->load->view('template/header', $data);
                    //         $this->load->view('pages/single_blog', $data);
                    //         $this->load->view('template/footer', $data);
                          
                    //     }



                         public function blog_post($slug)
                         {
              $query = $this->db->query("SELECT * FROM blog where   slug = '$slug'");
                         return $query->row_array();  
                                 }

                   public function contact()
                        {
                              $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
                              $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');
                               $this->form_validation->set_rules('phone', 'Mobile Number', 'trim|numeric');
                               $this->form_validation->set_rules('subject', 'subject', 'trim|required');
                                $this->form_validation->set_rules('message', 'Message', 'trim|required');

                             if ($this->form_validation->run() == FALSE) {
                                $data['title'] = 'Contact Us'; // Capitalize the first letter
                                        $this->load->view('template/header', $data);
                                        $this->load->view('page/contact', $data);
                                        $this->load->view('template/footer', $data);
                             } else {
                                $this->User_model->contact_us();
                                $data['title'] = 'Contact Us'; // Capitalize the first letter
                                        $this->load->view('template/header', $data);
                                        $this->load->view('page/contact', $data);
                                        $this->load->view('template/footer', $data);
                             }

                        }



                  public function team()
                  {
                     $this->form_validation->set_rules('reg_no', 'Registration Number', 'trim|required');
                         $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric');
                           $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
                              $this->form_validation->set_rules('first_name', 'Surname', 'trim|required');
                              $this->form_validation->set_rules('last_name', 'Others Name', 'trim|required');
                              $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
                              // $this->form_validation->set_rules('last_name', 'First Name', 'trim|required');
                              $this->form_validation->set_rules('git_url', 'Git Account Url', 'trim');
                              $this->form_validation->set_rules('about', 'About Us', 'trim|required');
                              $this->form_validation->set_rules('department', 'Department', 'trim|required');
                              $this->form_validation->set_rules('tech', 'Tech Oriented', 'trim|required');


                                    if ($this->form_validation->run()==FALSE) {
                                      // die();
                                      $data['departments'] = $this->User_model->set_department();
                                                  $data['title'] = 'Memeber Registration ';
                                                   $this->load->view('template/header', $data);
                                                  $this->load->view('page/team', $data);
                                                  $this->load->view('template/footer', $data);
                                    } else {
                                      $data = array(
                                          'regno'=>$this->input->post('reg_no'),
                                        'fname'=>$this->input->post('first_name'),
                                        'lname'=>$this->input->post('last_name'),
                                        'email'=>$this->input->post('email'),
                                        'phone'=>$this->input->post('phone'),
                                        'tech'=>$this->input->post('tech'),
                                        'about'=>$this->input->post('about'),
                                        'dept'=>$this->input->post('department'),
                                        'gender'=>$this->input->post('gender'),
                                         
                                      
                                      );
                                      $this->db->insert('team', $data);
                                       $username = $this->input->post('reg_no');
                                        $this->save($username);
                                    }
                  }





                  public function membership()
                  {


                    $this->form_validation->set_rules('reg_no', 'Registration Number', 'trim|required|callback_check_username_exists');
                    if ($this->form_validation->run() == FALSE) {
                      $username = $this->input->post('reg_no');

                      if ($this->User_model->membership($username)['status']=='0') {
                         $data['student_info'] = $this->User_model->membership($username);
                      $data['departments'] = $this->User_model->set_department();
                                  $data['title'] = 'Memeber Registration ';
                                   $this->load->view('template/header', $data);
                                         $this->load->view('page/reg_validate', $data);
                                      $this->load->view('template/footer', $data);
                      }else{
                        redirect('login','refresh');
                      }
                     
                    } else {
                      redirect('become-member','refresh');
                    }
                  }

                  public function exist_members()
                  {
                                  $data['title'] = 'Memeber Registration ';
                                   $this->load->view('template/header', $data);
                                         $this->load->view('page/existing_members', $data);
                                      $this->load->view('template/footer', $data);
                  }
                  public function blog()
                  {
                                    $data['title'] = 'Lastest News';
                                     $data['blogs'] = $this->User_model->blog_table();
                                   $this->load->view('template/header', $data);
                                         $this->load->view('page/blog', $data);
                                      $this->load->view('template/footer', $data);
                  }

                        public function add_news()
                {       
                    $this->form_validation->set_rules('post_title', 'Post Title', 'trim|required');
                    $this->form_validation->set_rules('body', 'Body Content', 'trim|required');
                     $this->form_validation->set_rules('link', 'Vedio Url', 'trim|valid_url');
                        if ($this->form_validation->run() == FALSE) {

                          $data['title'] = 'Add Blog';
             $data['admin'] = 'Add Blog';
            $data['section'] = 'Blog'; 
                        $this->load->view('template/header', $data);
                $this->load->view('page/add_news', $data);
                      $this->load->view('template/footer', $data);
                        } else {

                        $config['upload_path'] = './assets/post_image';
                        $config['allowed_types'] = 'gif|jpg|png|JPG|PNG|JPEG|jpeg|GIF';
                        $config['max_size']     = '0';
                        $config['max_width'] = '0';
                        $config['max_height'] = '0';
                        $config['file_name'] = $_FILES["userfile"]['name'];
                        $config['overwrite']= TRUE;

                        $this->load->library('upload', $config);

                     if ( !$this->upload->do_upload('userfile'))
                                {
                                        $error = array('error' => $this->upload->display_errors());

                                        $post_image = "no_pics.jpg";
                                }
                                else
                                {
                                    $data = array('upload_data' => $this->upload->data());
                                        $post_image = $_FILES['userfile']['name'];

                                }

                               $slug = url_title($this->input->post('post_title'));
                                $date = date('dS M,Y');
                                 $data = array(
                                 'title' => $this->input->post('post_title'),
                                 'slug' =>strtolower($slug),
                                 'blog_type' => $this->input->post('blog_type'),
                                 'link' => $this->input->post('link'),
                                 // 'icon' => $this->input->post('icon'),
                                      'body' => $this->input->post('body'),
                                      // 'post_image'=> $post_image,
                                      'created_date'=> $date
                                       
                                        );

                                    $this->db->insert('blog', $data);
                                     $this->session->set_flashdata("success_post","Post Successfully Publish");
                               
                           $data['title'] = 'Add Blog';
           $data['admin'] = 'Add Blog';
           $data['section'] = 'Blog'; 

                       $this->load->view('template/header', $data);
                $this->load->view('page/add_news', $data);
                    $this->load->view('template/footer', $data);
                        }
                }



                        public function add_lab()
                {       
                    $this->form_validation->set_rules('post_title', 'Post Title', 'trim|required');
                    $this->form_validation->set_rules('body', 'Body Content', 'trim|required');
                     $this->form_validation->set_rules('link', 'Vedio Url', 'trim|valid_url');
                        if ($this->form_validation->run() == FALSE) {

                          $data['title'] = 'Add Blog';
             $data['admin'] = 'Add Blog';
            $data['section'] = 'Blog'; 
                        $this->load->view('template/header', $data);
                $this->load->view('page/add_lab', $data);
                      $this->load->view('template/footer', $data);
                        } else {

                     //    $config['upload_path'] = './assets/post_image';
                     //    $config['allowed_types'] = 'gif|jpg|png|JPG|PNG|JPEG|jpeg|GIF';
                     //    $config['max_size']     = '0';
                     //    $config['max_width'] = '0';
                     //    $config['max_height'] = '0';
                     //    $config['file_name'] = $_FILES["userfile"]['name'];
                     //    $config['overwrite']= TRUE;

                     //    $this->load->library('upload', $config);

                     // if ( !$this->upload->do_upload('userfile'))
                     //            {
                     //                    $error = array('error' => $this->upload->display_errors());

                     //                    $post_image = "no_pics.jpg";
                     //            }
                     //            else
                     //            {
                     //                $data = array('upload_data' => $this->upload->data());
                     //                    $post_image = $_FILES['userfile']['name'];

                     //            }

                               $slug = url_title($this->input->post('post_title'));
                                $date = date('dS M,Y');
                                 $data = array(
                                 'title' => $this->input->post('post_title'),
                                 'slug' =>strtolower($slug),
                                 'blog_type' => $this->input->post('blog_type'),
                                 'link' => $this->input->post('link'),
                                 // 'icon' => $this->input->post('icon'),
                                      'body' => $this->input->post('body'),
                                      // 'post_image'=> $post_image,
                                      'created_date'=> $date
                                       
                                        );

                                    $this->db->insert('blog', $data);
                                     $this->session->set_flashdata("success_post","Post Successfully Publish");
                               
                           $data['title'] = 'Add Blog';
           $data['admin'] = 'Add Blog';
           $data['section'] = 'Blog'; 

                       $this->load->view('template/header', $data);
                $this->load->view('page/add_lab', $data);
                    $this->load->view('template/footer', $data);
                        }
                }



                  public function post($slug)
                  {
                     if (empty($slug)|| $this->User_model->blog_post($slug)==false) {
                          redirect('Page/error','refresh');
                        }
                                     $data['title'] = $this->User_model->blog_post($slug)['title'];
                             $data['blog'] =   $this->User_model->blog_post($slug); 
                            $this->load->view('template/header', $data);
                            $this->load->view('page/single_blog', $data);
                            $this->load->view('template/footer', $data);
                  }

                  public function guest()
                  {
                $this->form_validation->set_rules('reg_no', 'Email ID', 'trim|required|callback_check_guest_exists|valid_email');
         $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric');
           $this->form_validation->set_rules('location', 'Location Address', 'trim|required');
              $this->form_validation->set_rules('first_name', 'Surname', 'trim|required');
              $this->form_validation->set_rules('last_name', 'Others Name', 'trim|required');
              $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
              // $this->form_validation->set_rules('last_name', 'First Name', 'trim|required');
              $this->form_validation->set_rules('git_url', 'Git Account Url', 'trim');
              $this->form_validation->set_rules('about', 'About Us', 'trim|required');
              $this->form_validation->set_rules('department', 'Department', 'trim|required');
              $this->form_validation->set_rules('tech', 'Tech Oriented', 'trim|required');

                    if ($this->form_validation->run()==FALSE) {
                      // die();
                      $data['departments'] = $this->User_model->set_department();
                                  $data['title'] = 'Memeber Registration ';
                                   $this->load->view('template/header', $data);
                                  $this->load->view('page/guest', $data);
                                  $this->load->view('template/footer', $data);
                    } else {
                      $data = array(
                          'regno'=>$this->input->post('reg_no'),
                        'fname'=>$this->input->post('first_name'),
                        'lname'=>$this->input->post('last_name'),
                        'email'=>$this->input->post('location'),
                        'phone'=>$this->input->post('phone'),
                        'tech'=>$this->input->post('tech'),
                        'git_url'=>$this->input->post('git_url'),
                        'about'=>$this->input->post('about'),
                        'dept'=>$this->input->post('department'),
                        'gender'=>$this->input->post('gender')                      
                      );
                      $this->db->insert('tbl_members', $data);
                      $username = $this->input->post('reg_no');
                          $this->confirm($username);
                    }

                  }

}
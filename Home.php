<?php
/**
 * Created by PhpStorm.
 * User: SR
 * Date: 10/20/2016
 * Time: 4:02 PM
 */

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blogger', 'b_model', true);
    }

    
    public function new_user_registration()
    {

        // form post data
        $data = array();
        $data['full_name'] = $this->input->post('f_name');
        $data['email'] = $this->input->post('email');
        $data['mobile'] = $this->input->post('mobile');
        $data['password'] = md5($this->input->post('password'));
        
        // data insert into model with return insert_id
        $this->b_model->insert_new_blogger($data);
        
        // get new registered user info with insert_id
        $user = $this->b_model->select_blogger_info($id);
        
        // mail data here
        $mail_data=array();            
        $mail_data['user_name']= $user->full_name;
        $mail_data['company'] = "Incepta Blog Forum";            
        $mail_data['mobile'] = $user->mobile;            
        $mail_data['from_address'] = "incepta@gmail.com";  // mail sender                   
        $mail_data['to_address'] = $user->email;   // registered user email         
        $mail_data['subject']="Registration Successful.";   // mail subject         
        
        $this->b_model->send_email($mail_data,'activation_email'); // data to blogger model
        
        redirect("/");
       
    }

    




} 

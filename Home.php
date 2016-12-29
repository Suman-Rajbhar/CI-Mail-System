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

    
    public function new_registration()
    {

        $data = array();
        $data['full_name'] = $this->input->post('f_name');
        $data['email'] = $this->input->post('email');
        $data['mobile'] = $this->input->post('mobile');
        $data['password'] = md5($this->input->post('password'));        
        $this->b_model->insert_new_blogger($data);
        redirect("/");
    }

    




} 

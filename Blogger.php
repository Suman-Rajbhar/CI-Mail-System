<?php
/**
 * Created by PhpStorm.
 * User: SR
 * Date: 11/17/2016
 * Time: 3:49 PM
 */

class Blogger extends CI_Model{

    public function insert_new_blogger($data) // data insert in blogers table
    {
        $this->db->insert('blogers', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id; // return last insert id (row id)
    }

    
    public function select_blogger_info($id) // get user info from blogers table
    {
        $this->db->select('*');
        $this->db->from('blogers');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
	
    public function send_email($mail_data,$template_name)
    {
               
        $this->load->library('email'); // Email Library 
        $this->email->set_mailtype('html'); // set type for sending a markup template
        $this->email->from($mail_data['from_address']); 
        $this->email->to($mail_data['to_address']);        
        $this->email->subject($mail_data['subject']);
        $body = $this->load->view($template_name,$mail_data,true);   // message view template activation_email.php, data into template, boolean     
        $this->email->message($body);
        $this->email->send();
        $this->email->clear();
    }

    
} 

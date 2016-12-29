<?php
/**
 * Created by PhpStorm.
 * User: SR
 * Date: 11/17/2016
 * Time: 3:49 PM
 */

class Blogger extends CI_Model{

    public function inser_new_blogger($data)
    {
        $this->db->insert('blogers', $data);
    }

    public function check_blogger($email,$password)
    {
        $this->db->select('*');
        $this->db->from('blogers');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_all_bloggers()
    {
        $this->db->select("*");
        $this->db->from("blogers");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_blogger_info($id)
    {
        $this->db->select('*');
        $this->db->from('blogers');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_blog($b_id)
    {
        $query = $this->db->select('*')->from('blogs')->where('id', $b_id)->get();
        $result = $query->row();
        return $result;
    }

    public function update_blog_info($id, $data)
    {
        $this->db->where('id', $id)->update('blogs', $data);
    }

    public function insert_new_blog($data)
    {
        $this->db->insert('blogs', $data);
    }
    public function insert_new_like($b_id)
    {
        $data = array(
            'blog_id' => $b_id,
            'user_ip' => $_SERVER['REMOTE_ADDR'],
            'created_at' => date("Y:m:d H:i:s"),
        );
        $this->db->insert('blog_like', $data);
    }

    public function select_all_blogs($per_page, $offset)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('blogs');
        $query = $this->db->get('', $per_page, $offset);
        foreach ($query->result() as $row)
            $data[] = $row;
        return $data;
    }

    public function select_blogs()
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result  = $query->result();
        return $result;
    }

    public function select_blogs_all()
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $query = $this->db->get();
        $result  = $query->result();
        return $result;
    }

    public function select_blogs_all_user($email)
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('author', $email);
        $query = $this->db->get();
        $result  = $query->result();
        return $result;
    }

    public function set_blog_inactive($id)
    {
        $data = array(
            'status' => 0
        );

        $this->db->where('id', $id);
        $this->db->update('blogs', $data);
    }

    public function set_blog_active($id)
    {
        $data = array(
            'status' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('blogs', $data);
    }

    public function count_all_blogs()
    {
        return $this->db->count_all("blogs");
    }
	
	public function all_info()
    {
        $sql = "SELECT * FROM verified_exam_marks";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function select_blog_details($id)
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_blog_comments($id)
    {
        $query_result = $this->db->select('*')->from('blog_comment')->where('blog_id', $id)->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_blog_likes($id)
    {
        $query_result = $this->db->select('*')->from('blog_like')->where('blog_id', $id)->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_blog_user_like($id, $user_ip)
    {
        $query_result = $this->db->select('*')->from('blog_like')->where('blog_id', $id)->where('user_ip', $user_ip)->get();
        $result = $query_result->row();
        return $result;
    }

    public function save_a_comment($data)
    {
        $this->db->insert('blog_comment', $data);
    }
} 
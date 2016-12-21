<?php
class User_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_user($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_user_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_user($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'comment' => $this->input->post('comment'),
			'cellphone' => $this->input->post('cellphone'),

        );
        
        if ($id == 0) {
            return $this->db->insert('user', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('user', $data);
        }
    }
    
    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}

<?php

class Product_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_products($slug = FALSE){
        if($slug === FALSE){
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('products');
            return $query->result_array();
        }
        $query = $this->db->get_where('products', array('slug' => $slug));
        return $query->row_array();
    }

    public function create_product(){
        $slug = url_title($this->input->post('title'));

        $data = array(
          'title' => $this->input->post('title'),
          'image' => $this->input->post('image'),
          'price' => $this->input->post('price'),
          'slug' => $slug,
          'body' => $this->input->post('body')
        );

        return $this->db->insert('products', $data);
    }

    public function delete_product($id){
        $this->db->where('id', $id);
        $this->db->delete('products');
        return true;
    }
}
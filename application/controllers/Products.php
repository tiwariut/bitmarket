<?php

class Products extends CI_Controller{
    public function index(){
        $data['title'] = 'Latest Products';
        $data['products'] = $this->product_model->get_products();

        $this->load->view('templates/header');
        $this->load->view('products/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL){
        $data['product'] = $this->product_model->get_products($slug);
        if(empty($data['product'])){
            show_404();
        }
        $data['title'] = $data['product']['title'];

        $this->load->view('templates/header');
        $this->load->view('products/view', $data);
        $this->load->view('templates/footer');
    }
}

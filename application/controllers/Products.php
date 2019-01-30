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

    public function create(){
        $data['title'] = 'Upload Product';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('products/create', $data);
            $this->load->view('templates/footer');
        } else{
            $this->product_model->create_product();

            //Set message
            $this->session->set_flashdata('product_created', 'Your product has been uploaded.');

            redirect('products');
        }
    }

    public function delete($id){
        $this->product_model->delete_product($id);

        //Set message
        $this->session->set_flashdata('product_deleted', 'Your product has been deleted.');

        redirect('products');
    }

    public function edit($slug){
        $data['product'] = $this->product_model->get_products($slug);

        if(empty($data['product'])){
            show_404();
        }
        $data['title'] = 'Edit Product';

        $this->load->view('templates/header');
        $this->load->view('products/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $this->product_model->update_product();

        //Set message
        $this->session->set_flashdata('product_created', 'Your product has been updated.');

        redirect ('products');
    }


}

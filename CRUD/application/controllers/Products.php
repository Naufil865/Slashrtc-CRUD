<?php

class Products extends CI_Controller {

public function __construct(){
  parent::__construct();
  $this->load->model('products_model');
}

public function index()
{
  $this->load->helper('url');

  
  $data['data']=$this->products_model->get_products();
  $this->load->view('header');
  $this->load->view('list',$data);
  $this->load->view('footer');
}

public function create()
{
  $this->load->helper('url');

  
  //$data['data']=$this->products_model->insert_product();
  $this->load->view('header');
  $this->load->view('create');
  $this->load->view('footer');

}
public function store()
   {
       $products=new products_model;
       $products->insert_product();
       echo "Inserted Successful";
       redirect(base_url('index.php/Products/create'));
    }
public function edit($id)
{
 $this->load->model('products_model');
 $data['product'] = $this->products_model->fetchrowid($id);
  $this->load->view('header');
  $this->load->view('edit',$data);
  $this->load->view('footer');
}

public function update($id)
{
  $this->load->database();
  $this->load->model('products_model');
    
      $n=$this->input->post('title');
      $d=$this->input->post('description');
      $t=$this->input->post('type');
      $c=$this->input->post('category');
      // echo $id; 
      // echo "<br>";    
      // echo $n;
      // echo "<br>";
      // echo $d;
      // echo "<br>";
      // echo $t;
      // echo "<br>";
      // echo $c;
      // die();      
      
      $this->products_model->update_product($n,$d,$t,$c,$id);

      redirect(base_url('index.php/Products/index'));
}

public function delete($id)
   {

       $this->db->where('id', $id);
       $this->db->delete('proddb.producttb');
       redirect(base_url('index.php/Products/index'));
   }

}
?>
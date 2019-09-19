<?php

class Products_model extends CI_Model{
  public function get_products(){
    if(!empty($this->input->get("search"))){
      $this->db->like('title',$this->input->get("search"));
      $this->db->or_like('description',$this->input->get("search"));
    }
    $query = $this->db->get("proddb.producttb");
    return $query->result();
    }
  
  public function insert_product()
  {
    $data = array(
      'title' => $this->input->post('title'),
      'description' => $this->input->post('description'),
      'type' => $this->input->post('type'),
      'category' => $this->input->post('category')
    );
    return $this->db->insert("proddb.producttb",$data);
    
  }

  public function fetchrowid( $id )
  {
    $product = $this->db->get_where('proddb.producttb',array('id'=>$id))->row();
    return $product;
  }

  public function update_product($title,$description,$type,$category,$id)
  {
    
    $data=array(
      'title' => $title,
      'description' => $description,
      'type' => $type,
      'category' => $category
    );
  
      $this->db->where('id',$id);
      
      return $this->db->update('proddb.producttb',$data);
    }

  }
?>
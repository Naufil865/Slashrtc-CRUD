<?php 
class emp_model extends CI_Model {

  //function displayrecords() {
  //  $query = $this->db->get("empdb.tb2");
  //  return $query->result();
  //}
  function searchrecords(){

   /* if( $name != "" ){

      $this->db->where('name', $name );
    }
    if( $phonenumber != "" ){

      $this->db->where('phonenumber', $phonenumber );
    }
    if( $department != ""){

      $this->db->where('department',$department);
    }
    if($gender != ""){

      $this->db->where('gender',$gender);
    }*/
    
    $query = $this->db->get('empdb.tb2');
    return $query->result();
  }

  function get_emp($limit,$start){
    $this->db->limit($limit, $start);
    
    $query = $this->db->get('empdb.tb2');
    // echo $this->db->last_query();
    return $query->result();

  }

  function get_count(){
    return $this->db->count_all('empdb.tb2');
  }


  function saverecords2($data){
    $result = $this->db->insert("empdb.tb2",$data);
    return $result;
  }

  function updaterecords($data,$id){
    //$id = $this->input->post('id');
    //$result  = $this->db->update("empdb.tb2",$data);
    
    //echo $id;
    $this->db->where('id',$id);
    $this->db->update("empdb.tb2",$data);
    //echo $this->db->last_query();
    //die();

  }



  function saverecords($name,$phonenumber,$department,$gender,$hobbies,$address) {
          
    //$radio = $_POST['gender'];
    $checkarr = $_POST['hobbies'];
    $newValues = implode(",", $checkarr);
    
    $data = array(
    
       'name' => $name,
       'phonenumber' => $phonenumber,
       'department' => $department,
       'gender' => $gender,
        'hobbies' => $newValues,
       'address' => $address
    );

   return $this->db->insert("empdb.tb2",$data);
  }
    public function fetchrowid() {
     $id = $this->input->post('id'); 
    return $this->db->get_where('empdb.tb2',array('id'=>$id))->row();
    
  }



  public function update_emp($name,$phonenumber,$department,$gender,$hobbies,$address,$id) {
    
    $newValues = implode(",", $hobbies);
    
    $data=array(
      'name' => $name,
      'phonenumber' => $phonenumber,
      'department' => $department,
      'gender' => $gender,
      'hobbies' => $newValues,
      'address' => $address,     
    );
    //print_r($data);
    //die();
    $this->db->where('id',$id);
      
   return $this->db->update('empdb.tb2',$data);
  }
}
?> 
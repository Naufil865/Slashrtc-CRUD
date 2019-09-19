
<?php 
   class test extends CI_Model 
   { 
      public function demo()
	  { 
         echo "Just Checking Test Model";
      } 
      function saverecords($name,$address)
      {
      	$query = "insert into empdb.tb1 values(null,'$name','$address')";
      	$this->db->query($query);
      }
      function displayrecords()
      {
      	$query = $this->db->query("Select * from empdb.tb1");
      	return $query->result();
      }
      function deleterecords($id)
      {
      	$this->db->query("delete from empdb.tb1 where id='".$id."'");      	
      }
      function updaterecords($name,$address,$id)
      {
      	$query=$this->db->query("update empdb.tb1 SET name='$name',address = '$address' where id='".$id."'");
      }
   } 
?>
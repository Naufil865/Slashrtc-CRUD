<?php 
   class Hello extends CI_Controller
   {  
      public function index() 
	  { 
         echo "Hello World"; 
      } 
      public function about() 
	  { 
         //echo "About us";
         $this->load->view('about.php'); 
         $this->load->model('test');
         $this->test->demo();
      }
      public function savedata()
      {

         //to load a view form of registration
         $this->load->view('registration');
         //check submit button
         if($this->input->post('save'))
         {
            //get form data

            $n = $this->input->post('name');
            $a = $this->input->post('address');
            //call saverecords method of Hello MOdel
            $this->load->database();
            $this->load->model('test');
            $this->test->saverecords($n,$a);
            echo "Records Saved Successfully"; 
            redirect("Hello/dispdata");
         }
      }  
         //to display registration form data
      public function dispdata()
      {
         $this->load->model('test');
         $result['data']=$this->test->displayrecords();
         $this->load->view('display_records',$result);
      }

      public function deletedata()
      {
         $this->load->model('test');
         $id = $this->input->get('id');
         $this->test->deleterecords($id);
         echo "Records deleted";
         redirect("Hello/dispdata");

      }

      public function updatedata()
      {
         $this->load->database();
         $this->load->model('test');
         $id=$this->input->get('id');
         $result['data']=$this->test->displayrecords($id);
         $this->load->view('update_records',$result); 
   
         if($this->input->post('update')){

            $n=$this->input->post('name');
            $a=$this->input->post('address');
         
            $this->test->updaterecords($n,$a,$id);
            redirect("Hello/dispdata");
         }
}
   } 
?>
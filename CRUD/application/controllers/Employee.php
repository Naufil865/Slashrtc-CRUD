<?php 
  class Employee extends CI_Controller {

    public function index() {

     // print_r( base_url()."assets/jsfile/jquery.min.js" );
     // print_r (base_url("assets/jsfile/jquery.min.js"));
      //die();
      // site_url()."/Employee/xyz"
//from here
      //$this->load->model('emp_model');  
      //$result['data'] = $this->emp_model->displayrecords();
      //$this->load->view('empview/index.php',$result); 
      ///this is for search method
      //$name = $this->input->post('name');
      //$phonenumber = $this->input->post('phonenumber');
      //$department = $this->input->post('department');
      //$gender = $this->input->post('gender');

      //$this->load->model('emp_model');
      //$result['data'] = $this->emp_model->searchrescords($name,$phonenumber,$department,$gender);
      //
      //$this->load->view('empview/index.php',$result);


     
      $this->load->model('emp_model');
      $data = $this->emp_model->searchrecords();
      
      $this->load->view('empview/index.php',$data);

    }
    //pagination applied
    function displaytable(){
      $this->load->library("pagination");

        $config = array();
        $config["base_url"] = base_url('index.php/Employee/displaytable');

        $this->load->model('emp_model');

        $config["total_rows"] = $this->emp_model->get_count();

        $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['emps'] = $this->emp_model->get_emp($config["per_page"], $page);

        $this->load->view('empview/display.php', $data);

      //$this->load->model('emp_model');
      //$data = $this->emp_model->searchrecords();
      //$this->load->view('empview/display.php',$data);
    }

    public function getUsers() {

      $this->load->model('emp_model');
      $data = $this->emp_model->searchrecords();
      echo json_encode($data);
    }
    
    //public function search()
   // //{
   // //  $name = $this->input->post('name');
   // //  $phonenumber = $this->input->post('phonenumber');
   //
    //  $this->load->model('emp_model');
    //  $result['data'] = $this->emp_model->searchrecords($name,$phonenumber);
    //  
    //  $this->load->view('empview/index.php',$result); 
    //}

    public function add() {

      $this->load->view('empview/addemp.php');    
    }
    public function insert(){

        $checkarr = $_POST['hobbies'];
        $newValues = implode(",", $checkarr);
        $data = array(
                'name'  => $this->input->post('name'), 
                'phonenumber'  => $this->input->post('phonenumber'), 
                'department' => $this->input->post('department'),
                'gender' => $this->input->post('gender'),
                //'hobbies' => $this->input->post('hobbies'),
                'hobbies' => $newValues,
                'address' => $this->input->post('address'), 
            );
        $this->load->model('emp_model');
        $data =  $this->emp_model->saverecords2($data);
    
      echo json_encode($data);

        //$result=$this->db->insert('product',$data);
        //return $result;
      /*$name = $this->input->post('name');               //get form data Element Field In Form
      $phonenumber = $this->input->post('phonenumber');
      $department = $this->input->post('department');
      $gender = $this->input->post('gender');
      $hobbies = $this->input->post('hobbies');
      $address = $this->input->post('address');
      //call saverecords method of emp MOdel 
  
      $this->load->model('emp_model');
      $this->emp_model->saverecords($name,$phonenumber,$department,$gender,$hobbies,$address);
    
      echo "Records Saved Successfully"; 
      redirect("Employee/index"); */

    }

    public function delete($id) {

      $this->db->where('id', $id);
      $this->db->delete('empdb.tb2');
      redirect(base_url('index.php/Employee/index'));
    }

    public function edit($id) {

      $this->load->model('emp_model');
      $data['empdata'] = $this->emp_model->fetchrowid($id);
      $this->load->view('header');
      $this->load->view('empview/updateemp',$data);
      $this->load->view('footer');
    }
  
    public function update() {
           
      $this->load->database();
      $this->load->model('emp_model');
      
      $name=$this->input->post('name');
      $phonenumber=$this->input->post('phonenumber');
      $department=$this->input->post('department');
      $gender=$this->input->post('gender');
      $hobbies=$this->input->post('hobbies');
      $address=$this->input->post('address');
        
       // echo $id; 
       // echo "<br>";    
       // echo $name;
       // echo "<br>";
       // echo $department;
       // echo "<br>";
       // echo $gender;
       // echo "<br>";
       // echo $hobbies;
       // echo "<br>";
       // echo $address;
       // die();      
        
      $this->emp_model->update_emp($name,$phonenumber,$department,$gender,$hobbies,$address,$id);
  
      redirect(base_url('index.php/Employee/index'));
    }   

    function edit2(){
      $id = $this->input->post('id');
      $this->load->model('emp_model');
      $data = $this->emp_model->fetchrowid($id);
      echo json_encode($data);
    }

    function update2(){
      $checkarr = $_POST['hobbies'];
      $newValues = implode(",", $checkarr);
      
      $data = array(
        'name'  => $this->input->post('name'), 
        'phonenumber'  => $this->input->post('phonenumber'), 
        'department' => $this->input->post('department'),
        'gender' => $this->input->post('gender'),
        //'hobbies' => $this->input->post('hobbies'),
        'hobbies' => $newValues,
        'address' => $this->input->post('address'), 
      );
      $id = $this->input->post('id');
      echo "id".$id;
      $this->load->model('emp_model');
      $data =  $this->emp_model->updaterecords($data,$id);
    
      echo json_encode($data);
    }   
 }
?>
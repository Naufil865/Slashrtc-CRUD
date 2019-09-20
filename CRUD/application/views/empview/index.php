<html>
  <head>
    <title>Main View Of Employee</title>
    <h1 style="color: Blue;background-color: Orange;text-align: center;">Employee Details</h1>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script  src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
   <!-- <script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>-->

    
   
 
  </head>
  <body>
    <div class="container">
  
      <div class="pull-right">
  
          <button type="button" id="modaladd" class="btn btn-primary" data-toggle="modal" data-target=" #myModal">  Add New Employee </button>

         <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <div class="modal-header btn-primary">
              <h2 class="modal-title center">Add New Employee</h2>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        

              <div class="modal-body">  
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" placeholder="Enter Name" minlength="3" id="name" name="name" required>
                </div>
      
                <div class="form-group ">
                  <label for="phonenumber">PhoneNumber:</label>
                  <input type="text" class="form-control" placeholder="Enter PhoneNumber" pattern="[1-9]{1}[0-9]{9}" name="phonenumber" id="phonenumber" required>
                </div>
      
                <div class="form-group">
                  <label>Department:</label>
                    <div class="form-group">
                      <select name="department" id="department" required>
                        <option value="">Select</option>
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                      </select>
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <div class="radio">
                    <label> <input type="radio" name="gender" id="addgender1" class="gender" value="Male" checked>Male</label>
                    
                    <label> <input type="radio" name="gender" id="addgender2" class="gender" value="Female">Female</label>
                  </div>
                </div>
    
                <div class="form-group">
                 <label for="hobbies">Hobbies</label>
                  <div class="checkbox">
                    <label> <input type="checkbox" class="hobbies" name="hobbies" value="FootBall">FootBall</label>
                    <label> <input type="checkbox" class="hobbies" name="hobbies" value="Cricket">Cricket</label>
                    <label> <input type="checkbox" class="hobbies" name="hobbies" value="Dance">Dance </label>
                  </div>
                </div>
  
                <div class="form-group">        
                  <label for="address">Address:</label>       
                  <textarea class="form-control"name="address" rows="5" id="address" minlength="6" required></textarea>
                </div>             
              </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" id="btnsave" >Save</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        
          </div>
        </div>
      </div>  
   </div>

    <div class ="container">
      <div class="pull-top">
        <form method="post" action="<?php echo base_url('index.php/Employee/index');?>">
         
          <div class="form-group">
            <?php
              if(!isset($_POST['name'])){
                
                $txt = "";
                } else {
                $txt = $_POST['name'];
              }  
            ?>
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter Name"  name="name" value="<?= $txt ?>">
          </div>

          <div class="form-group">
            <?php
              if(!isset($_POST['phonenumber'])){
                $txt = "";
                } else {
                $txt = $_POST['phonenumber'];
                }  
            ?>
            <label for="phonenumber">PhoneNumber:</label>
            <input type="text"  placeholder="Enter PhoneNumber" name="phonenumber" id=" phonenumber" value="<?= $txt ?>">  
          </div>

          <div class="form-group">
            <?php
              if(!isset($_POST['department'])){
                $txt = "";
                } else {
                $txt = $_POST['department'];
                }  
            ?>
            <label>Department</label>
            <input type="text" placeholder="Enter Department" name="department" value="<?= $txt ?>" >
          </div>

         <div class="form-group">
           <label for="gender">Gender</label>
             <select name="gender">
                 <option value="">Select</option>
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
             </select>
         </div>
         <div>
          <input type="submit" name="submit" id="btnsubmit" class="btn-info" value="Search">
          <button class="btn-info"> <a href="<?php echo site_url('Employee/index') ?>"></a> Reset</button>
         </div>
        </form>
      </div>
    </div>

    


<!-- Upadete -->
<div class="container">
      <!-- Button to Open the Modal -->
      <div class="pull-right">
      <!--<button type="button" id="modalupdate" class="btn btn-primary" data-toggle="modal" data-target="#editmodal">
      Update Employee
        </button>-->

      <!-- The Modal -->
      <div class="modal" id="editmodal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <div class="modal-header btn-primary">
              <h2 class="modal-title center">Update Employeed</h2>
              <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
            </div>
        

            <div class="modal-body">
                <div class="form-group">
                  <label for="ID">ID</label>
                  <input type="text" class="form-control" id="edit_empid" name="edit_empid" required >
                </div>

                <div class="form-group">
                  <label for="name">Name is:</label>
                  <input type="text" class="form-control" placeholder="Enter Name" minlength="3" id="edit_name" name="edit_name" required>
                </div>
      
                <div class="form-group ">
                  <label for="phonenumber">PhoneNumber is:</label>
                  <input type="text" class="form-control" placeholder="Enter PhoneNumber" pattern="[1-9]{1}[0-9]{9}" name="edit_phonenumber" id="edit_phonenumber" required>
                </div>
      
                <div class="form-group">
                  <label>Department is</label>
                    <div class="form-group">
                      <select name="edit_department" id="edit_department" required>
                        <option value="">Select</option>
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                      </select>
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="gender">Gender is</label>
                  <div class="radio">
                    <label> <input type="radio" name="editgender1" id="editgender" class="editgender" value="Male" >Male</label>
                    
                    <label> <input type="radio" name="editgender2" id="editgender" class="editgender" value="Female">Female</label>
                  </div>
                </div>
    
                <div class="form-group">
                 <label for="hobbies">Hobbies is</label>
                  <div class="checkbox">
                    <label> <input type="checkbox" class="edithobbies" id="edit_hobbies" name="edithobbies" value="FootBall">FootBall</label>
                    <label> <input type="checkbox" class="edithobbies" id="edit_hobbies" name="edithobbies2" value="Cricket">Cricket</label>
                    <label> <input type="checkbox" class="edithobbies" id="edit_hobbies" name="edithobbies3"   value="Dance">Dance </label>
                  </div>
                </div>
  
                <div class="form-group">        
                  <label for="address">Address :</label>       
                  <textarea class="form-control" name="edit_address" id="edit_address" rows="5" id="address" minlength="6" required></textarea>
                </div>             
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" id="btnupdate"  >Save</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        
          </div>
        </div>
      </div>  
    </div>
  </div>



    
    <div class ="container">
      <!--<div class="pull-right">
        
        <a class="btn btn-primary" href="<?php echo site_url('Employee/add') ?>"> Add New Employee</a>
      </div>-->


        <table class="table" id="mydata" width="100%">
          <thead>
            <tr>
              <!--<th>Sr.No</th>-->
              <th>Name</th>
              <th>Phone Number</th>
              <th>Department</th>
              <th>Gender</th>
              <th>Hobbies</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="userTable"> 
          </tbody>
        </table>
    </div>

    <script type="text/javascript">
        function show_data(){
          
          $.ajax({
            type : 'ajax',
            url : '<?php echo site_url('Employee/getUsers') ?>',
            async : true,
            dataType : 'json',
            success : function(data){
              //console.log(data);
              var html = '';
                  var i;
                  for(i=0; i<data.length; i++){
                      html += '<tr>'+
                              '<td>'+data[i].name+'</td>'+
                              '<td>'+data[i].phonenumber+'</td>'+
                              '<td>'+data[i].department+'</td>'+
                              '<td>'+data[i].gender+'</td>'+
                              '<td>'+data[i].hobbies+'</td>'+
                              '<td>'+data[i].address+'</td>'+
                              '<td><a class="btn btn-info item_edit" id="modalupdate" data-id="'+data[i].id+'">update</a>'+

                              '<a class="btn btn-danger btn-xs" href="<?php echo site_url('Employee/delete');?>' + "/" + data[i].id +'">delete</a>'+
                              '</td>'+
                              '</tr>';

                  }

                  /*<button type="button" id="modalupdate" class="btn btn-primary" data-toggle="modal" data-target="#editmodal" href="<?php echo site_url('Employee/edit');?>' + "/"+ data[i].id +' ">updated </button>
                  
                  JavaScript:Void(0);

                  <a class="btn btn-info item_edit" id="modalupdate" data-toggle="modal" data-target="#editmodal" href="<?php echo site_url('Employee/edit');?>' + "/"+ data[i].id +' ">update</a>
                  */



                  $('#userTable').html(html);
            }

          });
        }
        $(document).ready(function(){
          show_data(); //call the function to display data 
          $('#mydata');
          //$('#mydata').dataTable();
        
        });
        //insert data 
        $('#btnsave').on('click',function(){
          console.log("btn click");
          var name = $('#name').val();
          var phonenumber = $('#phonenumber').val();
          var department = $('#department').val();
          var gender = $(".gender:checked").val();
  
          var hobbies = [];
          $.each($(".hobbies:checked"),function(){
            hobbies.push($(this).val());
          });

          var address = $('#address').val();
        
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Employee/insert');?>",
            dataType : "JSON",
            data : {name:name,phonenumber:phonenumber , department:department , gender:gender ,hobbies:hobbies,address:address },
            success : function(data){
   
              
              $('[name = "name"]').val("");
              $('[name = "phonenumber"]').val("");
              $('[name = "department"]').val("");
              $('[name = "address"]').val("");
              
              show_data();
              $("#modaladd").modal('hide');
               
            }
          });
        });
      // get data on model
       $('body').on('click','.item_edit',function(){
          var id = $(this).data('id');
          //console.log(id);
          $.ajax({
              type : "POST",
              url  : "<?php echo site_url('Employee/edit2')?>",
              dataType : "JSON",
              data : {id:id },
              success: function(data){
                //console.log(data);
                  $('#editmodal').modal('show');
                  $('[name = "edit_empid"]').val(data.id);
                  $('[name = "edit_name"]').val(data.name);
                  $('[name = "edit_phonenumber"]').val(data.phonenumber);
                  //$('[name = "editgender"]').val(data.gender);                               
                  //console.log(data.gender);         
                  if( data.gender == "Male" ) 
                  {
                    $('[name = "editgender1"]').prop("checked",true);
                    $('[name = "editgender2"]').prop("checked",false);
                  } 
                  else
                  {
                    $('[name = "editgender1"]').prop("checked",false);
                    $('[name = "editgender2"]').prop("checked",true);
                  }

                  console.log(data.hobbies);

                  if(data.hobbies == "FootBall")
                  {
                    $('[name = "edithobbies"]').prop("checked",true);
                  }
                  else{
                    $('[name = "edithobbies"]').prop("checked",false);
                  }
                  if(data.hobbies == "Cricket")
                  {
                    $('[name = "edithobbies2"]').prop("checked",true);
                  }
                  else
                  {
                    $('[name = "edithobbies2"]').prop("checked",false);
                  }
                  if(data.hobbies == "Dance")
                  {
                    $('[name = "edithobbies3"]').prop("checked",true);
                  }
                  else
                  {
                    $('[name = "edithobbies3"]').prop("checked",false);
                  }


                  $('[name = "edit_department"]').val(data.department);
                  $('[name = "edit_address"]').val(data.address);

            }
          });  
        });


      //UPDATE DATA
      $('#btnupdate').on('click',function(){
          //console.log("btn update click");
          
          var id = $('#edit_empid').val();
          var name = $('#edit_name').val();
          var phonenumber = $('#edit_phonenumber').val();
          var department = $('#edit_department').val();
          var gender = $(".editgender:checked").val();
  
          var hobbies = [];
          $.each($(".edithobbies:checked"),function(){
              hobbies.push($(this).val());
          });

          var address = $('#edit_address').val();
        
          $.ajax
          ({
            type : "POST",
            url  : "<?php echo site_url('/Employee/update2');?>",
            dataType : "JSON",
            data : {id:id,name:name,phonenumber:phonenumber,department:department,gender:gender ,hobbies:hobbies,address:address },
            success : function(data)
            {
              
              $('[name = "edit_name"]').val("");
              $('[name = "edit_phonenumber"]').val("");
              $('[name = "edit_department"]').val("");
              $('[name = "edit_address"]').val("");
              $("#editmodal").modal('hide');
              show_data();
              //$("#editmodal").hide();
               
            }
          });
       });


    </script>  
  

    
  </body>
</html>
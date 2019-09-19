<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src="<?php echo base_url('assets/jsfile/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/jsfile/jquery.validate.js')?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
     input.error {
       border: 1px dashed red;
       font-weight: 300;
       color: red;
     }
     label.error {
       color: red;
       font-size: 1rem;
       display: block;
       margin-top: 5px;
     }
    </style>
    <script type="text/javascript">
      $(document).ready(function() {
       $('#form1').validate({ // initialize the plugin
          rules: {
            'hobbies[]': {
                required: true,
                maxlength: 2
            },
            'department': {
              
                required: true
            }
          },
          messages: {
            'hobbies[]': {
                required: "You must check at least 1 box",
                maxlength: "Check no more than {0} boxes"
            },
            department:{

              required:"select any one"
            }
          }
        });
      });    
    </script>
  </head>
  <body>
    <div class="container">
     <h2>Add New Employee</h2>
      <form name="form1" id="form1" method="post" action="<?php echo base_url('index.php/Employee/insert');?>"  onsubmit="return validate()" >
    
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" placeholder="Enter Name" minlength="3" id="name" name="name" required>
        </div>
      
        <div class="form-group">
          <label for="phonenumber">PhoneNumber:</label>
          <input type="text" class="form-control" placeholder="Enter PhoneNumber" pattern="[1-9]{1}[0-9]{9}" name="phonenumber" id="phonenumber" required>
        </div>
      
        <div class="form-group">
          <label>Department</label>
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
            <label> <input type="radio" name="gender" value="Male" checked>Male</label>
            
            <label> <input type="radio" name="gender" value="Female">Female</label>
          </div>
        </div>
    
        <div class="form-group">
         <label for="hobbies">Hobbies</label>
          <div class="checkbox">
            <label> <input type="checkbox" name="hobbies[]" value="FootBall">FootBall</label>
            <label> <input type="checkbox" name="hobbies[]" value="Cricket">Cricket</label>
            <label> <input type="checkbox" name="hobbies[]" value="Dance">Dance </label>
          </div>
        </div>
  
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control"name="address" rows="5" id="address" minlength="6" required></textarea>
        </div>
    
        <input type="submit" name="submit">
      </form>
    </div>
  </body>
</html>

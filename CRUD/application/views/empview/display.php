<html>
    <head>
        <title>Main View Of Employee</title>
    <h1 style="color: Blue;background-color: Orange;text-align: center;">Employee Details</h1>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class ="container">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Department</th>
              <th>Gender</th>
              <th>Hobbies</th>
              <th>Address</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($emps as $d) { ?>  
            <tr>
              <td><?php echo $d->name; ?></td>
              <td><?php echo $d->phonenumber; ?></td>
              <td><?php echo $d->department; ?></td>
              <td><?php echo $d->gender; ?></td>
              <td><?php echo $d->hobbies; ?></td>
              <td><?php echo $d->address; ?></td>
                 
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <p><?php echo $links; ?></p>
      </div>
    </body>
</html>

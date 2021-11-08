<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1>Customer Details</h1>
    <table>
      <tr>
          <th>Sr.no</th>
          <th>User name</th>
          <th>Age</th>
      </tr>
      <tr>
          <td>1</td>
          <td><?= $users["u_name"] ?></td> 
          <td><?= $users["age"] ?></td> 
          <!-- short hand usage of php echo -->
      </tr>
      

    </table>
</body>
</html>

<?php
//   echo "<pre>";
//   print_r($users);
//   echo "</pre>";
?>
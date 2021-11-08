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
      
      <?php
    
        foreach ($users as $key => $value) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".($value["user_name"])."</td>";
            echo "<td>".($value["age"])."</td>";
            echo "</tr>";
        }  
      ?>               

    </table>
</body>
</html>

<?php
//   echo "<pre>";
//   print_r($users);
//   echo "</pre>";
?>
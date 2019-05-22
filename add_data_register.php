<?php
   $name = filter_input(INPUT_POST, 'name');
   $branch = filter_input(INPUT_POST, 'branch');
   $year = filter_input(INPUT_POST, 'year');
   $college = filter_input(INPUT_POST, 'college');
    
   if ((!empty($name))and(!empty($branch))and(!empty($year))and(!empty($college))){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "workshop";
    
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    
    if (mysqli_connect_error()){
      die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }
    else{
      $sql = "INSERT INTO register
      values ('$name','$branch','$year','$college')";
      if ($conn->query($sql)){
        include 'reg_work_success.html';
      }
      else{
        include 'reg_work_error.html';
        die();
      }
      $conn->close();
    }
   }
   else{
       include 'reg_work_error.html';
       die();
   }
?>
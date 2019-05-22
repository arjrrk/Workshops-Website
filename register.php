<?php
   $email = filter_input(INPUT_POST, 'email');
   $userid = filter_input(INPUT_POST, 'userid');
   $pass = filter_input(INPUT_POST, 'pass');
   if (!empty($email)){
    if (!empty($userid)){
      if (!empty($pass)){
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
          $sql = "INSERT INTO users
          values ('$email','$userid','$pass')";
          if ($conn->query($sql)){
            include 'reg_success.html';
          }
          else{
            include 'reg_error.html';
            die();
          }
          $conn->close();
        }
       }
       else{
        include 'reg_error.html';
        die();
       }
    }
    else{
        include 'reg_error.html';
        die();
    }
  }
  else{
    include 'reg_error.html';
    die();
  }
       
?>
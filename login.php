    <?php
     session_start();
     $userid = filter_input(INPUT_POST, 'userid');
     $pass = filter_input(INPUT_POST, 'pass');
     if (!empty($userid)){
        if (!empty($pass)){
            include 'connect.php';
            $query="SELECT * FROM users WHERE userid='$userid' and pass='$pass'";
            $result=mysqli_query($conn,$query);
            $count=mysqli_num_rows($result);
            if($count==1){
                $_SESSION['LOGIN'] = true;
                $_SESSION['userid'] = $userid;
                include 'home_login.html';              
            }
            else{
                include 'login_error.html';
            }
        }
        else{
            include 'login_error.html';
        }
    }
    else{
        include 'login_error.html';
    }
?>
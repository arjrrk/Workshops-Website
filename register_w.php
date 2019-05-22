<?php
session_start();
if(!@$_SESSION['LOGIN']){
    include 'login.html';
}
else{
    include 'workshop_reg.php';
}
?>
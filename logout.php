<?php
    session_start();
    $_SESSION['userid']=NULL;
    session_destroy();

    header("Location: login.html");
    exit;
?>
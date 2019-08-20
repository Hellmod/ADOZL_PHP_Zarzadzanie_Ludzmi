<?php
    session_start();
    session_destroy();
    $_session[]=array();   
    header('Location: index.php');
?>
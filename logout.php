<?php
    session_start();
    if(!empty($_SESSION['password'])){
        session_destroy();
        header('Location: index.php');
        die();
    }
    die();
?>
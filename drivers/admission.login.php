<?php
    if(isset($_POST['register'])){
        include_once '../include/db_connections.php';

        $name = $_POST['username'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['confirm-password'];
    }
?>
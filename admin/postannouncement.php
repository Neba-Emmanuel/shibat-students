<?php
session_start();
if(isset($_POST['info'])){
    include 'variables.php';

    $author = $_POST['author'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
    $sql = mysqli_query($mysqli,"INSERT INTO announcement(`author`, `title`, `body`) VALUES('$author', '$title', '$body')");
    if($sql){
        echo "<script language='javascript'>alert('Announcement posted!');
        window.location.href='/shibat-students/admin/be_records.php';
        </script>";
        echo(mysqli_error($mysqli));
    }
    else{
        echo "<script language='javascript'>alert('An error occured!');
        window.location.href='/shibat-students/admin/be_records.php';
        </script>";
        echo(mysqli_error($mysqli));
    }
}
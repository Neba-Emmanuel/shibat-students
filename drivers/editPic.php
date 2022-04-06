<?php
session_start();
if(isset($_POST['editPic'])){
    $pic = $_FILES["admissionPic"]["name"];
    $tempname = $_FILES["admissionPic"]["tmp_name"];    
    $folder = "../upload/".$pic;  
    // Now let's move the uploaded image into the folder: image
    move_uploaded_file($tempname, $folder);
}
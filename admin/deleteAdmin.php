<?php
session_start();
if (isset($_SESSION['email'])) {
    include 'adminLoginHandler.php';
    
    $id = $_GET['id'];
    $result = $conn->prepare("DELETE FROM admins WHERE ID = ?");
    $result->bindParam(1, $id);
    $result->execute();
    echo "<script language='javascript'>alert('Admin Deleted Successfuly');
                      window.location.href='/shibat-students/admin/addAdmin.php';
                       </script>";
    
    
} else {
    echo "<script language='javascript'>alert('Login to continue');
            window.location.href='/shibat-students/admin';
             </script>";
}
?>

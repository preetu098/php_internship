<?php
    include('../models/db.php');
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from tb_student where email='$email' and password='$password'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count==1)
    {
        header('location:../profile.php');
    }
    else 
    {
        echo "invalid information";
    }
?>
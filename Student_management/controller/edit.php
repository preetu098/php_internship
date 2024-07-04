<?php
    include('../models/db.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="update tb_student set name='$name',password='$password' where email='$email'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo "<script>alert('Record update succesfully');window.location.href='../profile.php'</script>";
    }
?>
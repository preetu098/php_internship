<?php
    include('../models/db.php');
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];


    $fetch_sql="select * from tb_student where email='$email'";
    $fetch_res=mysqli_query($conn,$fetch_sql);
    $number_count=mysqli_num_rows($fetch_res);
    if($number_count==0)
    {
        $sql="insert into tb_student(name,email,password) values('$name','$email','$password')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            echo "Record inserted succefully";
        }
        else 
        {
            echo mysqli_error($conn);
        }
    }
    else 
    {
        echo "this email id already exisit";
    }
?>
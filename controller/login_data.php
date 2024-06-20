<?php
    $name=  $_POST['name'];
    $password=$_POST['password'];
   
    if($name=="")
    {
        echo "<script>alert('please enter name');
            window.location.href='../login.php';
        </script>";
    }
   
    if($password=="")
    {
        echo "<script>alert('please enter password');
            window.location.href='../login.php';
        </script>";
    }
   else 
   {
        if($name=="pratibha" && $password=="admin")
        {
            header('location:../profile.php?q='.$name);
        }
        else 
        {
            echo "<script>alert('invalid information');
            window.location.href='../login.php'</script>";
        }
   }

?>
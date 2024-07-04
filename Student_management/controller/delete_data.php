<?php
    include('../models/db.php');
    $id=$_GET['id'];
    $sql="delete from tb_student where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo "<script>alert('Delete Succesfully');window.location.href='../profile.php'</script>";
    }
?>
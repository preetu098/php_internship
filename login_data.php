<h1>Database</h1>
<?php
$name=$_POST['name'];
$password=$_POST['password'];
if($name==""&&$password=="")
{
    echo "<script>
    alert(`Please Enter Username
    Please enter password`)
    window.location.href='login.php';
    </script>";
}
if($name==''){
    echo "<script>
    alert(`Please Enter Username`)
    window.location.href='login.php';
    </script>";
}
if($password==''){
    echo "<script>
    alert(`Please Enter Password`)
    window.location.href='login.php';
    </script>";
}
else{
    echo "Username:$name<br>Password:$password";
}

?>
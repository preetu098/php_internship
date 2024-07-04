

<?php
    include('models/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php
    
    $get_id=$_GET['id'];
    $sql="select * from tb_student where id='".$get_id."'";
    $res=mysqli_query($conn,$sql);
?>

<table class="table">
    <form action="controller/edit.php" method="post">
    <?php
        while($row=mysqli_fetch_assoc($res))
        {
            ?>
            <tr>
        <td><input type="text" name="name" value="<?php echo $row['name']?>"></td>
    </tr>
    <tr>
        <td><input type="text" name="email" value="<?php echo $row['email']?>" readonly></td>
    </tr>
    <tr>
        <td><input type="text" name="password" value="<?php echo $row['password']?>"></td>
    </tr>
            <?php 
        }
    ?>
    <tr>
        <td>
        <input type="submit" value="update">
        </td>
    </tr>
    </form>
</table>

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
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th >Action</th>
                </tr>

                <?php
                
                    $sql="select * from tb_student";
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($res))
                    {
                      
                        ?>
                        <tr>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['password']?></td>
                            <td> 
                                <a href="edit_data.php?id=<?php echo $row['id']?>"><button class="btn btn-primary">Edit</button></a>
                            
                            <a href="controller/delete_data.php?id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a>
                        
                        </td>
                        </tr>
                        <?php 
                    }
                ?>
            </table>
            </div>
        </div>
    </div>
</body>
</html>


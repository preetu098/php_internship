<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            for($i=0;$i<6;$i++){
                ?>
                <div class="col-lg-4 card">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, quo ipsam in asperiores maiores dolorem a eum itaque recusandae non quibusdam eius id et atque voluptate voluptates voluptatibus, ipsum excepturi.</p>
                </div>
                <?php
            }
            ?>
            
        </div>
    </div>
</body>
</html>
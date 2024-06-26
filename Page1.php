<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <?php
        for($i=1;$i<=6;$i++)
        {
            ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae facilis accusantium maiores illum incidunt, quaerat deleniti velit quas autem, quam ex. Deserunt aspernatur sit aliquam voluptates ducimus numquam id odit, nam accusamus eos. Velit!
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
  </div>
  </body>
</html>
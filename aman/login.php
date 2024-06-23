
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    body{
        height:100vh;
        overflow:hidden;
        margin:0;
        padding:0;
    }
    .container{
     height: 400px;
     width: 400px;
     background-color:burlywood;
     /* display:flex;
     justify-content:center; */
     position:absolute;
     top:30%;
     left:35%;
     margin:0;

    }
    .container h1{
        color:#000;
        display:flex!important;
        justify-content:center!important;
        
    }
    .button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  display:flex;
  font-size: 16px;
  width:90%;
}
</style>
<body>
    <div class="container">
    <h1>Login</h1>
   <form action="login_data.php" method="post">
    <input type="text" placeholder="Username" name="name">
    <label for="name">Username</label> 
    <input type="Password"name="password">
    <label for="name">password</label>
    <input type="Submit" value="Submit" class="button"> 
   </form>
    </div>
</body>
</html>
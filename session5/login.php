<?php
session_start();
require "lib/user.php";
if(isset($_POST['email'])){
      
        $email =$_POST['email'];
        $password =$_POST['password'];
       $res = login($email,$password);
        

       $_SESSION['user']=$res;
    
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
    

  <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="email" placeholder="Your Email"></input><br/>
        <input type="text" name="password" placeholder="Your password"></input><br/>
        <input type="submit"  value="login"></input>
        </form>


</body>
</html>
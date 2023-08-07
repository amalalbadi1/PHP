<?php

require "lib/user.php";
if(isset($_POST['name'])){
        $name =$_POST['name'];
        $email =$_POST['email'];
        $password =$_POST['password'];
       $res = register($name ,$email,$password);
       if($res){
        echo"<h1>user inserted</h1>";
       }
    
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

  <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" placeholder="Your Name"></input><br/>
        <input type="text" name="email" placeholder="Your Email"></input><br/>
        <input type="text" name="password" placeholder="Your password"></input><br/>
        <input type="submit" name="submit" value="register"></input>
        </form>


</body>
</html>
<?php
session_start();
require"lib/categories.php";
if(empty($_SESSION['user'])){
    header("location: login.php");
}



if(isset($_POST['name'])){
    // $categories_id =$_POST['categories_id'];
    $name =$_POST['name'];
    $user_id =$_SESSION['user']['user_id'];
    $res = add($name,$user_id);
    if($res){
        echo "<h1>category inserted</h1>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        
        <input type="text" name="name" placeholder="name"></input><br/>
        <input type="submit" name="submit" value="add new category"></input>
        </form>




</body>
</html>
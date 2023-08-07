
<?php


session_start();
$namebd='amal';
$passwordbd='123';
// if(empty($_POST['name']) && empty($_POST['password'])){
        
//         echo " <br/> Please fill in the fields";
//     }else{
//         $name= $_POST['name'];
//         $password= $_POST['password'];
//         echo ('Your Name is:     '. $name. '<br/>');
//         echo ('Your password is:'   . $password. '<br/>');
//     }

if(isset($_POST['name'])){

    if ($namebd== $_POST['name'] && $passwordbd == $_POST['password']){
    $_SESSION['name'] = $_POST['name'];
    header("location:home.php");


}
else{
    echo "error";
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
    <form action="longin.php" method="POST">
        <input type="text" name="name" placeholder="Your Name"></input><br/>
        <input type="password" name="password" placeholder="Your password"></input><br/>
        <input type="submit" name="submit" value="Submit"></input>
        </form>
   
</body>
</html>
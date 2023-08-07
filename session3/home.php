<?php

session_start();
if(empty($_SESSION['name'])){
    header("location:login.php");
} 
echo"home";
echo"<a href='longin.php'>logout</a>"

?>
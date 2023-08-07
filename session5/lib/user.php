<?php

function register($name ,$email,$password){
    $connct=mysqli_connect("localhost","root","","login");
    $sql ="INSERT INTO `users`( `name`, `email`, `password`, `admin`) VALUES ('$name','$email','$password','0')";
    mysqli_query($connct,$sql);
    return mysqli_affected_rows($connct);

}


function login($email,$password){
    $connct=mysqli_connect("localhost","root","","login");
    $mysql ="SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
   $query= mysqli_query($connct,$mysql);
    return mysqli_fetch_assoc($query);

}


?>
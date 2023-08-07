<?php

setcookie('username',$_POST['username'],time() - 60*60*24, "/");

header("location:login.php");

?>
<?php
session_start();
require "lib/categories.php";
if(empty($_SESSION['user'])){
    header("location: login.php");
}

$res = delete($_GET['categories_id ']);

if($res) {
    header("location: index.php");
}
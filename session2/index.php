<?php

// $user =[
//     "name"=> "amal",
//     "age"=> 26,
//     "address"=>"oman"
// ];
//print_r ($user);

// for($i=0; $i=count($user);$i++)
// {


// }



// foreach($user as $key =>$value )
// {
//     echo $key." : " .$value."<br>";
// }



// $users =[
//     ["name"=>"amal", "age"=>26],
//     ["name"=>"misa", "age"=>25]
// ];


// foreach ($users as $value) {
//     foreach ($value as $key => $v) {
//         echo "{$key} : {$v} <br>"  ;
        
//     }
//     echo "<hr>";
// }

//echo "num 1 + num 2 =".$_POST['num1'] + $_POST['num2'];



// $name = $_GET['name'];
// $email = $_GET['email'];
// $contact = $_GET['contact'];
// if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
//     if(empty($_POST["name"])) {
//         $nameerr = "Name is required";
//     }else {
//         $name=  $_POST["name"];
//     }

// }

// if(empty$_POST['name']||empty$_POST['password']){
//     echo "this faild is empty"
// }else{
//     echo $email = $_POST['email'];
//     echo $contact = $_POST['contact'];
//     echo $password = $_POST['password'];
// }


// $name = $_POST['name'];


// $tmp = $_FILES['img']['tmp_name'];
// $name =$_FILES['img']['name'];
// move_uploaded_file($tmp,"img".$name)


// if(isset($_POST['Submit1']))
// { 

// $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
// $name = $_POST["filename"];

// move_uploaded_file($_FILES["file"]["tmp_name"], $name.".".$extension);
// // echo "Old Image Name = ". $_FILES["file"]["name"]."<br/>";
// // echo "New Image Name = " . $name.".".$extension;

// }


// $ar=explode("/",$_FILES['img']['type']);
// $tmp = $_FILES['img']['tmp_name'];
// $name =$_POST['name'];
// move_uploaded_file($tmp,"img/".$name.".".$ar[1])



var_dump($_FILES['files']);





?>
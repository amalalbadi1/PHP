
<?php
// if(isset($_POST['email'])){
//     $name =$_POST['name'];
//     $email =$_POST['email'];
//     $password =$_POST['password'];
//     $connct=mysqli_connect("localhost","root","","codeacademy");
//     $sql ="INSERT INTO `user`(`name`,`email`,`password`) VALUES ('$name', '$email','$password')";
//     mysqli_query($connct,$sql);

// }




// $id =$_POST['id'];
//     $connct=mysqli_connect("localhost","root","","codeacademy");
//     $sql ="DELETE FROM `user` WHERE id =  $id";
//     mysqli_query($connct,$sql);






// $name =$_POST['name'];
// $id =$_POST['id'];
//     $email =$_POST['email'];
//     $password =$_POST['password'];
//     $connct=mysqli_connect("localhost","root","","codeacademy");
//     $sql ="UPDATE `user` SET `id`='$id',`name`='$name',`email`='$email',`password`='$password' WHERE id ='$id'";
//     mysqli_query($connct,$sql);



    $connct=mysqli_connect("localhost","root","","codeacademy");
    $sql ="SELECT * FROM `user`";
    $mysql = mysqli_query($connct,$sql);
    $data=mysqli_fetch_all($mysql,MYSQLI_ASSOC);

    echo "<pre>";

    foreach($data as $value){
        foreach($value as $key => $v){
            echo$key." : " .$v ."<br>";
        }
        echo"<hr>";
    }
?>
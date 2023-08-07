<?php


function add($name ,$user_id){
    $connct=mysqli_connect("localhost","root","","login");
   
    $sql ="INSERT INTO `categories`(`name`,`user_id`) VALUES ('$name','$user_id')";
    mysqli_query($connct,$sql);
    return mysqli_affected_rows($connct);

}
  


function show(){
    $connect = mysqli_connect("localhost","root","","login");
    $sql = "SELECT * FROM `categories`";
    $query = mysqli_query($connect,$sql);
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
 }




 
function DELETE($id){
    $connect = mysqli_connect("localhost","root","","login");
    $sql = "DELETE FROM `categories` WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    return mysqli_affected_rows($connect);
 }
?>
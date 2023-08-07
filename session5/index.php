<?php
require "lib/categories.php";
session_start();
if(empty($_SESSION['user'])){
    header("location: login.php");
}

$data = show();

// echo "<pre>";
// print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>categories_id</th>
    <th>name</th>
    <th>delete</th>
    <th>updact</th>
  </tr>
<?php  foreach($data as $c):?>
  <tr>
<td><?php echo $c ['categories_id'];?></td>
<td><?php echo $c ['name'];?></td>
<td><a href="delete.php?categories_id=<?= $c['categories_id']; ?>">delete</a></td>
<td><a href="updact.php" >updect</a></td>
</tr>
<?php endforeach?>
</table>
</body>
</html>
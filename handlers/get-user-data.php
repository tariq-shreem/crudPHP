<?php 

$sql="SELECT id,name,email,status FROM users where id=$userId";
$sqlResult=mysqli_query($conn,$sql);
$userData=mysqli_fetch_assoc($sqlResult);
<?php 
require("db.php");
$userId=$_GET['userId'];
$sql="DELETE FROM users where id=$userId";
if(mysqli_query($conn,$sql)){ ?>
<script>alert("user deleted ");</script>
<?php 
header("Refresh:0;url=../index.php");
}
?>
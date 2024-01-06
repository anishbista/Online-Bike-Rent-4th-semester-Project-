<?php
include('includes/config.php');
$id = $_GET['id'];
$sql = "delete from tblbooking  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
 ?>
 <a href = "http://localhost/rent/"> Go to Homepage </a>
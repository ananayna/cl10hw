<?php

$pdid= $_REQUEST['id'];
include './../enb.php';
$query = "DELETE FROM addproduct WHERE id= '$pdid' ";
$result = mysqli_query($conn, $query);
header("Location: ./../productlist.php");
?>
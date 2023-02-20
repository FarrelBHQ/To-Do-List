<?php
include "config.php";
echo $id = $_GET['ID'];
mysqli_query($con, "DELETE FROM `todotable` WHERE Id = $id ");
header("location:index.php");

?>

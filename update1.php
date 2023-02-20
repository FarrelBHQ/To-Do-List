<?php
include "config.php";
$List = $_POST['list'];
$ID = $_POST['id'];

mysqli_query($con , "UPDATE `todotable` SET `list`='$List' WHERE `todotable` .`Id` = '$ID'");
header ("location:index.php");

?>
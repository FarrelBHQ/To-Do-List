<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"></link>
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<?php
include "config.php";
$id = $_GET['ID'];
$sql = mysqli_query($con, "SELECT * FROM `todotable` WHERE Id = '$id' ");
$data = mysqli_fetch_array($sql);
?>

<body class="bg-info">

<form action="update1.php" method="POST">
<div class="container">
    <div class="row justify-content-center m-auto mt-1  py-3 col-md-6">
        <h3 class="text-center font-monospace">Update</h3>
        <div class="col-8">
            <input type="text" value="<?php echo $data['list']?>" name="list"  class="form-control shadow">
        </div>
        <div class="col-2">
            <button class="btn btn-success "><i class="fa-solid fa-check"></i></button>
            <input type="hidden" name="id" value="<?php echo $data['Id']?>">
        </div>
    </div>
</div>    
</form>
    
</body>
</html>
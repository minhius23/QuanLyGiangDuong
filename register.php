<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    
</body>
</html>
<?php
    if(isset($_POST['txtsubmit'])){
        if(empty($_POST['txtuser']) or empty($_POST['txtpassword'])){
            echo "<script> alert('ban chua nhap du? du lieu')</script>";
        }
        else{
            if(mysqli_num_rows()){

            }
        }
    }
?>
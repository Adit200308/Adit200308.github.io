<?php 
session_start();
include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
   <div style = "text-align:center; padding:15%;">
        <p style= "font-size:50px; font-weight:bold;">
            Hello 
            <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query = mysqli_query($conn,"SELECT user.* FROM`user` Where user.email = '$email;  ");
                while($row = mysqli_fetch_array($query)){
                    echo $row['fname'].' /n'.$row['email']; 
                }
            }
            ?>
            
        </p>
    </div>
    
</body>
</html>

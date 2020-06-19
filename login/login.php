<?php
include'DB.php';
$ID=$_POST['ID'];
$PASS=$_POST['PASS'];
$sqli="insert into info(ID,PASS)
values('$ID','$PASS');";
mysqli_query($conn,$sqli);
header("Location:login.html?success");



?>
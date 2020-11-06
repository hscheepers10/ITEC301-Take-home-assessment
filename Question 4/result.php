<?php
$con = mysqli_connect('127.0.0.1','root','','myDB');
$query = "SELECT id,firstname,lastname,email,username,password FROM clients WHERE ";
$result1 = mysqli_query($con,$query);

?>
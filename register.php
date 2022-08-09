<?php
$nom=$_POST["nom"];
$username=$_POST["username"];
$Tel=$_POST["Tel"];
$email=$_POST["email"];
$password=$_POST["password"];
$requet="insert into userregister values ('$nom' , '$username' , '$email' ,'$Tel','$password') " ; 
$con=mysqli_connect("127.0.0.1" , "root" ,"", "registration" ) ;
mysqli_query($con , $requet); 
header("location:index.html");
?>

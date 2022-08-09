<?php
$email=$_POST["email"];
$password=$_POST["password"];
$con=mysqli_connect("127.0.0.1" , "root" ,"", "registration" ) ;
$sql = "SELECT * FROM userregister WHERE email='$email' and password='$password'";
$result = mysqli_query($con, $sql);
if ($result ->num_rows > 0) {
header("Location: index.html");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.RETRY!!')</script>";
	}
?>
<?php
if(isset($_POST['uname'])){
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$conn = mysqli_connect("sql303.epizy.com","epiz_32375456","nNnemtsKgIwZW3","epiz_32375456_music");
$stmt = $conn->prepare("SELECT * FROM Data WHERE username =? and password=?");
$stmt->bind_param("ss",$uname,$pwd);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows == 0)
{
	echo "<h3>sign in Failure....username or password is incorrect or user don't have an account<h3>";
}
else
{
	header("Location:home.html");
}
$stmt->close();
}
?>
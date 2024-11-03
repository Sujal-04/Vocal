<?php
$conn = mysqli_connect("localhost","root","","music");
if(isset($_POST['unametxt'])){
$uname= $_POST['unametxt'];
$pwd= $_POST["pwdtxt"];
$email= $_POST["emailtxt"];
$to= $email;
$subject="welcome $uname";
$message="Your sign up is successful.<br>You can now experience high quality music and enjoy";
$sql="insert into data (username,password,email) values ('$uname','$pwd','$email')";
$headers="From: co2020.sujal.shinde@ves.ac.in";
$headers.="MIME-Version: 1.0" . "\r\n";
$headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
ini_set("SMTP","ssl://smtp.gmail.com");
 ini_set("smtp_port","25");
mail($to,$subject,$message,$headers);
if($conn->query($sql)==true){
    echo"record inserted";
}
else{
    echo"error";
}
}
?>
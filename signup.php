<?php
if(isset($_POST['unametxt'])){
$uname= $_POST['unametxt'];
$pwd= $_POST["pwdtxt"];
$email= $_POST["emailtxt"];
$conn = mysqli_connect("sql303.epizy.com","epiz_32375456","nNnemtsKgIwZW3","epiz_32375456_music");
$sql="insert into Data (username,password,email) values ('$uname','$pwd','$email')";
if($conn->query($sql)==true){
    echo"record inserted";
}
else{
    echo"error";
}
}
?>
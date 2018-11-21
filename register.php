<?php
$con = mysqli_connect("localhost","root","","barber");
$sql = 'INSERT INTO member (username, password, name, tel, status) VALUES ("'.$_POST['username'].'","'.$_POST['password'].'","'.$_POST['name'].'","'.$_POST['tel'].'","user")';
$result = mysqli_query($con,$sql);
if($result){
	echo "Success";
}else{
	echo "Failed";
}
?>
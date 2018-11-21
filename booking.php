<?php
$con = mysqli_connect("localhost","root","","barber");
$sql = 'INSERT INTO member (name_member, id_service, queue_date, tel_member) VALUES ("'.$_POST['name'].'","'.$_POST['service'].'","'.$_POST['date'].'","'.$_POST['tel'].'")';
//$sql = 'INSERT INTO queue (name_member,id_service,queue_date,tel_member) VALUES ("pattamakorn","1","10:30","0953296289")';
$result = mysqli_query($con,$sql);
if($result){
	echo "Success";
}else{
	echo "Failed";
}
?>
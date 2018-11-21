<?php

$con = mysqli_connect("localhost","root","","barber");

$sql = 'SELECT * FROM member WHERE username="'.$_POST['username'].'" && password="'.$_POST['password'].'"';
$result = mysqli_query($con,$sql);
$account = array();
while($check = mysqli_fetch_array($result)){
	$cat = array();
	$cat["id"] = $check["id"];
    $cat['username'] = $check['username'];
    $cat['password'] = $check['password'];
    $cat['name'] = $check['name'];
    $cat['status'] = $check['status'];
    array_push($account, $cat);
 
}
echo json_encode($account);
?>
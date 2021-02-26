<?php 
$con = mysqli_connect('localhost', 'root', '','testdb');

$name = $_POST['name'];
$age = $_POST['age'];
if(isset($_POST['street'])){
$street = $_POST['street'];
}
if(isset($_POST['street2'])){
$street2 = $_POST['street2'];
}
if(isset($_POST['city'])){
$city = $_POST['city'];
}
 if(isset($_POST['region'])){
$region = $_POST['region'];
}
if(isset($_POST['zip'])){
$zip = $_POST['zip'];
}
if(isset($_POST['phone'])){
$phone = $_POST['phone'];
}
if(isset($_POST['occ'])){
$occ = $_POST['occ'];
}
if(isset($_POST['contribution'])){
$contribution = $_POST['contribution'];
}
if(isset($_POST['past_exp'])){
$past_exp = $_POST['past_exp'];
}
if(isset($_POST['skills'])){
$skills = $_POST['skills'];
}
if(isset($_POST['email'])){
$email = $_POST['email'];
}

$sql = "INSERT INTO `datacyberF` ('name','age','address1','address2','city','region','zip','email','mobile','occupation','contribution','past_exp','skills')
VALUES ('$name','$age','$street','$street2','$city','$region','$zip','$email','$phone','$occ','$contribution','$past_exp','$skills')";

$rs = mysqli_query($con, $sql);
if($rs)
{
echo "Contact Records Inserted";
}
?>
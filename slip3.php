<?php

Session_start();

if(isset($_POST['submit'])){

$username=$_POST['user'];
$password=$_POST['pass'];


$correct_username='pop';
$correct_password='pop12';

if($username==$correct_username && $password==$correct_password){


header('location:slip2.html');
Exit;
}else{

if(isset($_SESSION['attempts'])){
$_SESSION['attempts']--;
}else{
$_SESSION['attempts']=20;
}

if($_SESSION['attempts']<=0){
echo" Maximum login attempts exceeded.Please try again later.";
}
else{

echo"Invalidusernameorpassword.Youhave".$_SESSION['attempts']."Attempt(s)left.";
}
}
}
?>
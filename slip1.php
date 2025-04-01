<?php
session_start();
if(isset($_SESSION['cnt'])){
$_SESSION['cnt']+=1;
echo"you visted ".$_SESSION['cnt']." times";
}
else{
$_SESSION['cnt']=1;
echo"welcome to website";
}

?>






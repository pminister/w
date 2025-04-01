<?php
session_start();

if(isset($_POST['eno']) && isset($_POST['ename']) && isset($_POST['add'])){
$_SESSION['eno']=$_POST['eno'];
$_SESSION['ename']=$_POST['ename'];
$_SESSION['add']=$_POST['add'];

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Second page</title</title>
</head>
<body>

<form action="slip43.php" method="post">

<lable for="basic" >Basic:</label>
<input type="text" name="basic">
<lable for="da" >DA:</label>
<input type="text" name="da">
<lable for="hra" >HRA:</label>
<input type="text" name="hra">
<input type="submit" name="submit">
</form>
</body>
</html>



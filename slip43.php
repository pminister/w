<?php 
session_start();

if(isset($_POST['basic']) && isset($_POST['da']) && isset($_POST['hra'])){
$_SESSION['basic']=$_POST['basic'];
$_SESSION['da']=$_POST['da'];
$_SESSION['hra']=$_POST['hra'];
}

$total = $_SESSION['basic'] + $_SESSION['da'] + $_SESSION['hra'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>FINAL PAGE</title>
</head>
<body>
    <h1>EMPLOYEE DETAIL</h1>

    <p>ENO: <?php echo  $_SESSION['eno']; ?></p>
    <br>
    <p>ENAME: <?php echo $_SESSION['ename']; ?></p>
    <br>
    <p>ADD: <?php echo $_SESSION['add']; ?></p>
    <br>
    <p>BASIC: <?php echo $_SESSION['basic']; ?></p>
    <br>
    <p>DA: <?php echo $_SESSION['da']; ?></p>
    <br>
    <p>HRA: <?php echo $_SESSION['hra']; ?></p>
    <br>
    <p>TOTAL: <?php echo $total; ?></p>
    <br>
</body>
</html>
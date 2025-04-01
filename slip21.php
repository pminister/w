<?php

$fontfamily= $_COOKIE['fontfamily'];
$fontsize = $_COOKIE['fontsize'];
$fontcolor =$_COOKIE['fontcolor'];
$bgcolor =$_COOKIE['bgcolor'];

?>
<!DOCTYPE html>
<html>
<head>
<title>final page</title>

<style>
body{
font:<?php echo $fontfamily; ?>
size:<?php echo $fontsize ; ?>px;
color:<?php echo $fontcolor ;?>;
background-color: <?php echo $bgcolor;?>;
}
</style>
</head>
<body>
<h1>Pagewithnewsettings</h1>
<p>This is the page with the new settings.The fontstyle is <?php echo $fontfamily; ?> </p>
<p>the size is <?php echo $fontsize ; ?> 
<br>
the color is <?php echo $fontcolor ;?>
<br>
the bgcolor is <?php echo $bgcolor;?>

</body>
</html>
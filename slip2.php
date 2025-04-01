<?php
$fontfamily = $_POST['fontstyle'];
$fontsize = $_POST['fontsize'];
$fontcolor = $_POST['color'];
$bgcolor =$_POST['bgcolor'];


echo "you selected $fontfamily family";

echo "</br>";

echo "you have selected  $fontsize fontsize";

echo "</br>";

echo "you have selected  $fontcolor fontcolor";

echo "</br>";

echo "you have selected  $bgcolor bgcolor";


setcookie("fontfamily",$fontfamily,time()+86400);

setcookie("fontsize",$fontsize,time()+86400);

setcookie("fontcolor",$fontcolor,time()+86400);

setcookie("bgcolor",$bgcolor,time()+86400);


echo "</br>";
echo "</br>";
echo "</br>";

echo "<button onclick=\"window.location.href='slip21.php';\">APPLY CHANGES</button>";


?>




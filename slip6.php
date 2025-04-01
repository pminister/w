<?php

$xml=simplexml_load_file("slip6.xml");


foreach($xml as $r){
  echo"title:".$r->title."<br>";
  echo"author:".$r->author."<br>";
  echo"Price:".$r->price."<br>";
  echo"publisher:".$r->publisher."<br>";
  echo"<hr>";
}

?>
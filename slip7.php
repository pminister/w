<?php

$xml = new DOMDocument();

$xml->load("slip7.xml");

$movies=$xml->getElementsByTagName("movie");

foreach ($movies as $movie)
{
$moviNo = $movie->getAttribute("MovieNO");
$MovieTitle = $movie->getElementsByTagName("MovieTitle")[0]->textContent;
$ActorName = $movie->getElementsByTagName("ActorName")[0]->textContent;
$ReleaseYear = $movie->getElementsByTagName("ReleaseYear")[0]->textContent;

echo"movie number is $moviNo <br>";
echo"movie title is $MovieTitle <br>";
echo"actor name is $ActorName <br>";
echo "release year is $ReleaseYear <br>";
echo"<hr>";
}

?>

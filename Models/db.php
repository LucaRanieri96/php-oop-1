<?php
include __DIR__.'/models/Movie.php';
include __DIR__.'/models/Genre.php';

$genre_1 = new Genre('Fantascienza');
$genre_2 = new Genre('Avventura');

$matrix = new Movie('Matrix', 'Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dalle sorelle Lana e Lilly Wachowski.',$genre_1);
$avatar = new Movie('Avatar', 'Avatar è un film del 2009 scritto, diretto, co-prodotto e co-montato da James Cameron.',$genre_2);

<?php

class Genre
{
  public $name;
  
  public function __construct(string $_name)
  {
    $this->name = $_name;
  }
};

class Movie
{
  public $title;
  public $description;
  public $genre;
  public function __construct(string $_title, string $_description, Genre $_genre)
  {
    $this->title = $_title;
    $this->description = $_description;
    $this->genre = $_genre;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function getGenre()
  {
    return $this->genre;
  }
}
;
$genre_1 = new Genre('Fantascienza');

$matrix = new Movie('Matrix', 'Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dalle sorelle Lana e Lilly Wachowski.',$genre_1);
$avatar = new Movie('Avatar', 'Avatar è un film del 2009 scritto, diretto, co-prodotto e co-montato da James Cameron.',$genre_1);

var_dump($matrix);
var_dump($avatar);
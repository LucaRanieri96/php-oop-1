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
  public function __construct(string $_title, string $_description)
  {
    $this->title = $_title;
    $this->description = $_description;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function getDescription()
  {
    return $this->description;
  }
}
;

$matrix = new Movie('Matrix', 'Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dalle sorelle Lana e Lilly Wachowski.');
$avatar = new Movie('Avatar', 'Avatar è un film del 2009 scritto, diretto, co-prodotto e co-montato da James Cameron.');

var_dump($matrix);
var_dump($avatar);
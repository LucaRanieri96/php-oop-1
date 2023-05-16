<?php

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
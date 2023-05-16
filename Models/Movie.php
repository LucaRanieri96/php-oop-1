<?php

class Movie
{
  public $title;
  public $description;
  public $genre;
  public $image_url;
  public function __construct(string $_title, string $_description, string $_image_url, Genre $_genre)
  {
    $this->title = $_title;
    $this->description = $_description;
    $this->genre = $_genre;
    $this->image_url = $_image_url;
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
  public function getImgUrl()
  {
    return $this->image_url;
  }
}
;
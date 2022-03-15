<?php

class Movie {
  public $title;
  public $year;
  public $language;
  public $country;

  public function __construct($myCountry) {
    $this->country = '<p>'. $myCountry. '</p>';
  }

  public function checkGenre($myGenre) {
  
    if($myGenre == 'Noir') {
        echo '<p> This is a Noir movie </p>';
    } else {
      echo '<p> Other genre </p>';
    }

  }

}

$firstMovie = new Movie('USA');
$firstMovie->title = "The Batman";
$firstMovie->checkGenre('Noir');

echo $firstMovie->title;
echo $firstMovie->country;

?>
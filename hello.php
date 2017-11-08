<?php
 class Movie
 {
     private $title;
     private $director;
     private $year;
     
     function __construct($title = "My movie", $director = "A director", $year = 1970)
     {
         $this->title = $title;
         $this->director = $director;
         $this->year = $year;
         
     }
     
     public function getName()
     {
         return $this->name;
     }
     
     public function setName($name)
     {
         $this->name = $name;
     }
     
     function info()
     {
         print 'Title: ' . $this->title . ' Director: ' . $this->director . ' Year: ' . $this->year;
     }
 }
 
 $movie1 = new Movie("Ligne verte", "Michel Pierre", 1999);
 
 $movie1->info();
?>
<?php 
class Movie {
    public $movie_name;
    public $movie_desc;
    public $movie = [];
    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function updateMovie() {
        
    }
}
?>
<?php 
class Movie {
    public $movie_name;
    public $movie_desc;
    public $id;
    public $movie = [];
    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function getMovieDetails() {
        $sql = "SELECT * FROM videos WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        $results = $stmt->get_results();
        if($results->num_rows == 1) {
            $this->movie = $results->fetch_assoc();
          }
    }
    public function updateMovie($movie_name) {
        $this->movie_name = $movie_name;
        $this->getMovieDetails();
        $sql = "UPDATE videos SET video_name = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->movie_name);
        $stmt->execute();
        if($stmt->affected_rows == 1) {
            $this->upload();
         }
    }
    public function upload() {
        header("Location: admin.php?edit=success");
    }
}
?>
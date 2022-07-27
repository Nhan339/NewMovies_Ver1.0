<?php 
class Movie {
    public $movie_id;
    public $movie_name;
    public $movie_img;
    public $movie_url;
    public $movie_details;
    public $movie_genre;
    public $movie_desc;
    public $movie = [];
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // function getMovie($movie_id, $conn) {
    //     $sql = "SELECT * FROM movies WHERE movie_id = ?";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bind_param("i", $this->movie_id);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     if($result->num_rows == 1) {
    //       return $result->fetch_assoc();
    //     }
    //   }
    public function getMovieDetails() {
        $sql = "SELECT * FROM movies WHERE movie_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->movie_id);
        $stmt->execute();
        $results = $stmt->get_results();
        if($results->num_rows == 1) {
            $this->movie = $results->fetch_assoc();
          }
    }
    public function updateMovie($movie_name, $movie_id) {
        $this->movie_id = $movie_id;
        $this->movie_name = $movie_name;
        $this->getMovieDetails();
        $sql = "UPDATE movies 
                SET movie_name = ? 
                WHERE movie_id = $movie_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $this->movie_name, $this->movie_id);
        $stmt->execute();
        if($stmt->affected_rows == 1) {
            $this->upload();
         }
    }
    public function upload() {
        header("Location: admin.php");
    }

    public function Upload_movie() {
        if (isset($_POST['submit']) && isset($_FILES['my_video'])) {
            include "db_conn.php";
            $video_name = $_FILES['my_video']['name'];
            $vid_name = $_POST['vname'];
            $tmp_name = $_FILES['my_video']['tmp_name'];
            $error = $_FILES['my_video']['error'];
        
            if ($error === 0) {
                $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
        
                $video_ex_lc = strtolower($video_ex);
        
                $allowed_exs = array("mp4", 'webm', 'avi', 'flv');
        
                if (in_array($video_ex_lc, $allowed_exs)) {
                    
                    $video_url = uniqid("video-", true). '.'.$video_ex_lc;
                    $video_upload_path = 'uploads/'.$video_url;
                    move_uploaded_file($tmp_name, $video_upload_path);
        
                    // Now let's Insert the video path into database
                    $sql = "INSERT INTO movies(movie_url, movie_name) 
                           VALUES('$video_url', '$vid_name')";
                    mysqli_query($conn, $sql);
                    header("Location: view.php");
                }else {
                    $em = "You can't upload files of this type";
                    header("Location: admin.php?error=$em");
                }
            }
        
        
        }else{
            header("Location: admin.php");
        }
    }
}
?>
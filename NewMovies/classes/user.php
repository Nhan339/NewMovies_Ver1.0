<?php
class User {
    public $user_id;
    public $user_name;
    public $user_email;
    public $user_role;
    public $conn;
    public $user_password1;
    public $user_password2;
    public $user_hash;
    public $users = [];
    public $errors = [];
    public function __construct($conn) {
      $this->conn = $conn;
    }
    public function minmaxChars($string, $min, $max = 1000) {
        if(strlen($string)< $min || strlen($string) > $max) {
          return false;
        } else {
          return true;
        }
      }
    public function getUsername() {
        $sql = "SELECT * FROM users WHERE user_name = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->user_name);
        $stmt->execute();
        $results = $stmt->get_result();
        if($results->num_rows == 1) {
          $this->users = $results->fetch_assoc();
        }
    }
    public function createAccount(){
      $this->user_hash = password_hash($this->user_password1, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (user_name, email, hash) VALUES (?,?,?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("sss", $this->user_name, $this->user_email, $this->user_hash);
      $stmt->execute();
      if($stmt->affected_rows == 1) {
        $this->getUsername();
        $this->login();
     }
    }

    public function checkNewUser($user_name, $user_email, $user_password1, $user_password2) {
        $this->user_name = $user_name;
        $this->user_email = $user_email;
        $this->user_password1 = $user_password1;
        $this->user_password2 = $user_password2;
        $this->getUsername();
        // check user name is available
        if(!$this->minmaxChars($this->user_name, 5, 20)) {
          $this->errors['create_password'] = "Username must be between 5-20 characters long";
        }
        if($this->getUsername() == 1) {
          $errors['create_username'] = "Username already taken";
        }
        if(empty($this->user_name)){
            $this->errors['signup_username'] = "Username cannot left blank";
        }
        // validate email
        if(!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) {
          $this->errors['signup_email'] = "This email is invalid!";
        }
        //create new user and login
        if(empty($this->errors)) {
          $this->createAccount();
          //$this->createTeacherAccount();
        }
    }
    public function login() {
      //$_SESSION['user_id'] = $this->users['ID'];
      //$_SESSION['user_name'] = $this->users['user_name'];
      $_SESSION['loggedin'] = true;
      header("Location: Homepage.php?login=success");
    }
    public static function logout() {
      $_SESSION = [];
      session_destroy();
      header("Location: index.php?logout");
    }
}
?>
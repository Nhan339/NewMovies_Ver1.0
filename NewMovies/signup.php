<?php
  include 'includes/header.php';
  include 'classes/user.php';
  if(isset($_POST['create-account'])) {
    $user_name = $_POST['username'];
    $user_email = $_POST['email'];
    $user_password1 = $_POST['password1'];
    $user_password2 = $_POST['password2'];
    $user = new User($conn);
    $user->checkNewUser($user_name, $user_email, $user_password1, $user_password2);
    //$errors = $user->errors;
  }
?>
<style media="screen">
  <?php include 'css/style.css'; ?>
  ::placeholder {
    color: white;
  }
  .site-navbar-wrap {
    position: unset !important;
    z-index: 1;
    width: 100%;
    left: 0;
  }
  .signup {
  width: 100%;
  border-radius: 3rem;
  height: 45px;
  background: rgba(255,255,255,0.08);
  border: 1px solid #05feef;
  color: white;
  padding: 6px 12px;
}
.form-control {
  border-radius: 2rem;
  transition: 0.3s;
}
.container h1 {
  color: #f86b1c;
}
</style>
<div class="container-fluid">
  <section>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h1 class="mb-4 text-center">Sign up</h1>
              <form class="" action="signup.php" method="post">
                <div class="form-group">
                  <label for="username"></label>
                  <input class="signup signup-username" type="text" placeholder="Username" name="username" value="" >
                  <p class="error"><?php if(isset($errors['create_username'])) {echo $errors['create_username'];} ?></p>
                </div>
                <div class="form-group">
                  <label for="email"></label>
                  <input class="signup signup-emails" type="email" placeholder="Email" name="email" value="">
                  <p class="error"><?php if(isset($errors['signup_email'])) { echo $errors['signup_email'];} ?></p>  
                </div>
                <div class="form-group">
                  <label for="password1"></label>
                  <input class="signup signup-password1" type="password" placeholder="Password" name="password1" value="">
                </div>
                <div class="form-group">
                  <label for="password2"></label>
                  <input class="signup signup-password2" type="password" placeholder="Confirm Password" name="password2" value="">
                  <p class="error"><?php if(isset($errors['create_password'])) { echo $errors['create_password'];} ?></p>
                </div>
                <br>  
                <div class="form-group">
                    <button class="form-control btn btn-success" type="submit" name="create-account">CREATE ACCOUNT</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>
<?php include 'includes/footer.php'; ?>
<?php 
include 'classes/user.php';
include 'db.php';
if(isset($_POST['start'])) {
  $user_email = $_POST['email'];
  $user = new User($conn);
  $user->checkLogin($user_email);
  $errors = $user->errors;
}
?>
<style>
/* global setting */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background: #000;
  color: #fff;
  font-weight: 500;
  font-family: Arial, sans-serif;
}

ul {
  list-style: none;
}

.lg {
  font-size: 1.5rem;
}

/* button style */
.btn {
  text-decoration: none;
  color: #fff;
  padding: 10px 20px;
  background: #e50914;
  border-radius: 5px;
  font-size: 1.1rem;
  text-align: center;
}

/* inner container title and text style */

.inner-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 1;
  line-height: 1.25;
}
.inner-title {
  font-size: 1.8rem;
  width: 90%;
}

.inner-title h1 {
  margin-bottom: 1rem;
}

.inner-text {
  font-size: 1.5rem;
  width: 90%;
}

/* email form */

.email-form {
  margin: 1rem;
}
.email-form .get-started {
  padding-top: 1rem;
  display: flex;
  height: 80%;
}

.email-form .get-started > input {
  border-radius: 2px 0 0 2px;
  border: 3px solid #333;
  padding-left: 10px;
  font-size: 1.1rem;
  outline: none;
  flex: 1;
}

/* header */
.header {
  height: 110vh;
  position: relative;
  background: url("https://assets.nflxext.com/ffe/siteui/vlv3/8ef88e03-6f89-4c75-ae51-f8da7d252358/6ac07e5f-07ca-4543-8540-f22edce8bb02/TW-en-20210208-popsignuptwoweeks-perspective_alpha_website_small.jpg")
    no-repeat center center/cover;
  box-shadow: inset 0 50px 300px #000, inset 0 -50px 300px #000;
  border-bottom: 10px #333 solid;
}

/* brightness and vignette effect*/
.overlay {
  height: 100%;
  width: 100%;
  background: #000;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0.4;
}

/* logo */

.logo {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
  position: relative;
  z-index: 1;
}

.logo > img {
  width: 150px;
}

/* header text , input form and button*/

.header .inner-container {
  margin-top: 10rem;
}

.header .inner-title {
  width: 50%;
  text-align: center;
}

.header h1 {
  margin-bottom: 1rem;
}

.header .inner-text {
  width: 50%;
  text-align: center;
}

/* showcase 1 */

.showcase {
  border-bottom: 10px solid #333;
  padding: 2rem 0;
}
.showcase-container {
  display: flex;
  width: 85%;
  margin: auto;
}

.showcase-img {
  position: relative;
  z-index: 1;
}

.showcase-animation {
  position: absolute;
  left: 75px;
  top: 95px;
  z-index: -1;
}

/* showcase 2*/

.case2 {
  width: 90%;
}

.showcase-container.case2 > .showcase-img {
  margin: 1.2rem 0;
}

.downloading {
  background: #000;
  width: 60%;
  height: 125px;
  position: absolute;
  top: 335px;
  left: 125px;
  border: 5px solid #333;
  border-radius: 10px;
  padding: 0.7rem;
  display: flex;
}

.downloading > img {
  height: 100%;
}

.download-text {
  padding: 0.5rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.download-text > p {
  color: #0066e3;
}

/* showcase 3*/

.case3 .showcase-animation {
  width: 395px;
  height: 225px;
  top: 50px;
  left: 120px;
}

/* faq list */
.faq {
  border-bottom: 10px solid #333;
}

.faq .inner-container {
  line-height: 1.5;
  margin: 2rem 0;
}

.faq .inner-title {
  text-align: center;
}
.faq h1 {
  margin-bottom: 5rem;
}

.faq h2 {
  display: flex;
  justify-content: space-between;
  padding: 1.5rem;
}

.faq ul {
  width: 60%;
  margin: auto;
}

.faq li {
  border-bottom: 5px solid #000;
  background: #333;
  cursor: pointer;
}

.faq li.show i {
  transform: rotate(45deg);
}

.faq li > p {
  padding: 1rem 0;
  border-top: 1px solid #000;
  padding: 1.5rem;
  font-size: 1.3rem;
  position: absolute;
  max-height: 0;
  visibility: hidden;
  transition: max-height 0.1s ease-in;
}

.faq .inner-text {
  margin-top: 2rem;
}

/* show list item */
.faq li.show p {
  max-height: 700px;
  position: relative;
  visibility: visible;
}

/* footer */

footer {
  color: #757575;
  margin: 3rem auto;
  width: 70%;
}

footer .links > * {
  margin-bottom: 20px;
}

footer p {
  margin-bottom: 2rem;
}

footer .links ul {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 1rem;
}

footer .language {
  padding: 1rem 0;
  font-weight: 700;
  cursor: pointer;
  width: 14%;
  border: 1px solid #333;
  border-radius: 0.2rem;
  font-family: inherit;
  padding: 1rem;
  position: relative;
}

footer .language:active {
  outline: 1px solid #fff;
  box-shadow: 0 0 0 2px #fff;
}

footer .dropdown-list {
  width: 100%;
}

footer .dropdown-list ul {
  display: none;
  position: absolute;
  background: #000;
  border: 1px solid #333;
  top: 58px;
  width: 100%;
  left: 0;
}

footer .dropdown-list li {
  margin: 0.5rem 0;
}

/* show dropdown item */
footer .dropdown-list ul.show {
  display: block;
}

/* large-screen*/

@media (max-width: 950px) {
  /* global setting */

  /* button */
  .btn-lg {
    padding: 10px 12.5px;
    font-size: 15px;
    text-align: center;
    margin: 10px auto;
  }

  /* text style */

  .inner-title {
    font-size: 1.6rem;
    text-align: center;
    width: 100%;
  }

  .inner-text {
    font-size: 1.2rem;
    width: 100%;
    text-align: center;
  }

  /* email form */
  .email-form .get-started {
    padding-top: 1rem;
    display: flex;
    flex-direction: column;
  }

  .email-form .get-started > input {
    padding: 1rem;
    font-size: 1.1rem;
  }

  /* nav logo */
  .logo > img {
    width: 120px;
  }

  /* header */
  .header {
    height: 100%;
  }

  .header .inner-title {
    width: 70%;
  }

  /* showcase */
  .showcase-container {
    flex-direction: column;
    width: 90%;
  }

  .showcase-img {
    display: flex;
    justify-content: center;
  }

  .showcase-animation {
    left: 180px;
    top: 95px;
    z-index: -1;
  }

  .case2 .showcase-img {
    order: 2;
  }

  .case3 .showcase-animation {
    top: 50px;
    left: 218px;
  }

  /* faq list */
  .faq ul {
    width: 90%;
    margin: auto;
  }

  .faq h2 {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    font-size: 1.2rem;
  }

  /* footer */
  footer {
    width: 90%;
  }

  footer .language {
    width: 20%;
  }
}

/* tablet-screen */
@media (max-width: 768px) {
  .header .inner-container {
    margin-top: 2rem;
  }

  .inner-title {
    width: 90%;
    font-size: 1.5rem;
  }

  .inner-text {
    width: 90%;
    font-size: 1.5rem;
  }
  .case1 .showcase-animation {
    left: 100px;
  }

  .case3 .showcase-animation {
    left: 135px;
  }
  /* button */

  .btn {
    padding: 10px 15px;
    font-size: 15px;
  }
}

/* median-screen*/
@media (max-width: 550px) {
  /* nav logo */

  .logo > img {
    width: 100px;
  }

  /* showcase*/
  .inner-text .get-started > input {
    padding: 0.5rem;
    font-size: 1.1rem;
  }
  .showcase-img {
    display: flex;
    justify-content: center;
  }

  .showcase-img > img {
    width: 100%;
  }

  .case1 .showcase-animation {
    width: 400px;
    left: 35px;
    top: 45px;
  }

  .case3 .showcase-animation {
    width: 300px;
    top: 0;
    left: 85px;
  }

  .downloading {
    top: 260px;
    left: 95px;
    height: 70px;
    border: 3px solid #333;
  }

  .download-text {
    font-size: 10px;
    padding-left: 15px;
  }

  /* faq list */
  .faq h1 {
    text-align: center;
    font-size: 25px;
    margin-bottom: 0.5rem;
  }

  .faq ul {
    width: 100%;
  }
  .faq li {
    font-size: 10px;
  }

  /* footer */
  footer .links ul {
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1rem;
  }
}

@media (max-width: 375px) {
  .inner-title {
    font-size: 1rem;
  }
  .inner-text {
    font-size: 1rem;
  }

  /* header */

  .header .inner-title {
    width: 90%;
  }
  .header .inner-text {
    width: 90%;
  }
  /* showcase */
  .case1 .showcase-animation {
    width: 250px;
    left: 45px;
    top: 50px;
  }

  .case3 .showcase-animation {
    width: 210px;
    left: 60px;
    top: -25px;
  }
  .downloading {
    top: 180px;
    left: 66px;
  }
}

</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>NewMovies</title>
    <!-- MDB icon -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1038/1038100.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="outter-container">
      <!-- header -->
      <header class="header">
        <nav class="logo">
            <h1 class="text-white" style=" 
            background: -webkit-linear-gradient(orange, #333);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
            ">
            NEWMOVIES</h1>
          <div class="sign-in"> <a class="btn btn-lg btn-outline-warning" href="signup.php" role="button">Sign In</a></div>
        </nav>

        <div class="inner-container">
          <div class="inner-title text-white">
            <h1>Unlimited movies, TV shows, and more.</h1>
          </div>
          <div class="inner-text">
            <p>Watch anywhere. Cancel anytime.</p>
          </div>

          <div class="email-form" >
            <h4 class="text-white">
              Ready to watch? Enter your email to create or restart your
              membership.
            </h4>
            <form class="" action="index.php" method="post">
              <div class="get-started">
                <label for="email"></label>
                <input class="" type="email" name="email" placeholder="Email address" value=""/>
                <button class="btn btn-lg btn-warning" type="submit" name="start">Get started<i class="fas fa-chevron-right"></i></button>
              </div>
              <br>
              <p class="text-danger error"><?php if(isset($errors['unexisted_email'])) {echo $errors['unexisted_email'];} ?></p>
            </form>
          </div>
        </div>
        <div class="overlay"></div>
      </header>
      <!-- showcase1 -->
      <section class="showcase">
        <div class="showcase-container case1">
          <div class="inner-container">
            <div class="inner-title">
              <h1 style="color: orange;">Enjoy on your TV.</h1>
            </div>
            <div class="inner-text">
              <p>
                Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV,
                Blu-ray players, and more.
              </p>
            </div>
          </div>
          <div class="showcase-img">
            <img
              src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png"
              alt=""
            />
            <video class="showcase-animation" autoplay playsinline muted loop>
              <source
                src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v"
                type="video/mp4"
              />
            </video>
          </div>
        </div>
      </section>
      <!-- showcase 2 -->
      <section class="showcase">
        <div class="showcase-container case2">
          <div class="showcase-img">
            <img
              src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg"
              alt=""
            />
            <div class="downloading">
              <img
                src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/boxshot.png"
                alt=""
              />
              <div class="download-text">
                <h2>Stranger Things</h2>
                <p>Downloading...</p>
              </div>
            </div>
          </div>
          <div class="inner-container">
            <div class="inner-title">
              <h1 style="color: orange;">Download your shows to watch offline.</h1>
            </div>
            <div class="inner-text">
              <p>
                Save your favorites easily and always have something to watch.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- showcase3 -->
      <section class="showcase">
        <div class="showcase-container case3">
          <div class="inner-container">
            <div class="inner-title">
              <h1 style="color: orange;">Watch everywhere.</h1>
            </div>
            <div class="inner-text">
              <p>
                Stream unlimited movies and TV shows on your phone, tablet,
                laptop, and TV without paying more.
              </p>
            </div>
          </div>
          <div class="showcase-img">
            <img
              src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png"
              alt=""
            />
            <video class="showcase-animation" autoplay playsinline muted loop>
              <source
                src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices.m4v"
                type="video/mp4"
              />
            </video>
          </div>
        </div>
      </section>

  </body>




  


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
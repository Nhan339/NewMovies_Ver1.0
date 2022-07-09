<?php 
  include 'includes/header.php';
?>
<style>
        /* Style the button used to pause/play the video */
  #myBtn {
    width: 150px;
    font-size: 15px;
    padding: 10px;
    border: none;
    background: rgba(208, 77, 12, 0);
    outline: auto;
    color: #fff;
    cursor: pointer;
  }

  #myBtn:hover {
    background: rgb(208, 77, 12);
    color: black;
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
    <div class="hero" >
      <!-- The video -->
      <video autoplay muted loop id="myVideo">
        <source src="images/Marvel Studios' Thor_ Love and Thunder - Teaser Trailer (2022) Chris Hemsworth, Natalie Portman.mp4" type="video/mp4">
      </video>
      <!-- WARNING: STILL FIXING -->
      <!-- Optional: some overlay text to describe the video -->
      <div class="content">
        <div class="film-title">
          <h1>MOVIES: <span style="color: rgb(208, 77, 12);">Thỏ bay màu</span></h1>
        </div>
        <div class="film-info" style="display: grid; grid-template-columns: 1fr 2fr;">
          <h3>2022 ‧ Action/Adventure<hr></h3> 
          <div class="watch-btn"> <a class="btn btn-lg btn-outline-warning" href="moviedetail.php" role="button">Watch Now</a></div>
          
        </div>
        <div class="film-detail">
          <p>Thor embarks on a journey unlike anything he's ever faced -- a quest for inner peace. However, his retirement gets interrupted by Gorr the God Butcher, a galactic killer who seeks the extinction of the gods.</p>
        </div>
        <br>
        <!-- <div>
          <span>
            <p>Use a button to pause/play the video with JavaScript</p>
            <button id="myBtn" type="button" class="btn btn-outline" onclick="myFunction()">Pause</button>
          </span>
        </div> -->
      </div>
    </div>

    <div class="space" style="padding-top: 5rem;"></div>



<!-- CAROUSEL FOR ACTION MOVIES -->
    <div class="container-fluid pt-lg-5">
      <div class="tile">
        <h2 style="color: white;" >Action movies:</h2>
      </div>
        <div id="carouselActionFlim" class="carousel slide" data-mdb-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"  data-mdb-interval="10000">
              <div class="container-fluid" style="padding-right: 150px;">
                <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item"  data-mdb-interval="2000">
            <div class="container-fluid" style="padding-right: 150px;">
                <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item">
            <div class="container-fluid" style="padding-right: 150px;">
                <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
          </div>

          <button class="carousel-control-next" type="button" data-mdb-target="#carouselActionFlim" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>





<!-- CAROUSEL FOR HORROR MOVIES -->
    <div class="container-fluid pt-lg-5">
      <div class="tile">
        <h2 style="color: white;" >Horror movies:</h2>
      </div>
        <div id="carouselHorrorFlim" class="carousel slide" data-mdb-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"  data-mdb-interval="10000">
              <div class="container-fluid" style="padding-right: 150px;">
                <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item"  data-mdb-interval="2000">
            <div class="container-fluid" style="padding-right: 150px;">
                <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item">
            <div class="container-fluid" style="padding-right: 150px;">
                <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
          </div>

          <button class="carousel-control-next" type="button" data-mdb-target="#carouselHorrorFlim" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>


<!-- CAROUSEL FOR ROMANCE MOVIES -->
    <div class="container-fluid pt-lg-5">
      <div class="tile">
        <h2 style="color: white;" >Romance movies:</h2>
      </div>
        <div id="carouselRomanceFlim" class="carousel slide" data-mdb-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"  data-mdb-interval="10000">
              <div class="container-fluid" style="padding-right: 150px;">
              <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item"  data-mdb-interval="2000">
            <div class="container-fluid" style="padding-right: 150px;">
            <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item">
            <div class="container-fluid" style="padding-right: 150px;">
                <div class="row">
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
                <div class="col-md-3">
                  <img class="img-thumbnail" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/08/the-boys-season-3.jpg" alt="">
                </div>
              </div>
            </div>
            </div>
          </div>

          <button class="carousel-control-next" type="button" data-mdb-target="#carouselRomanceFlim" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>

    

<?php 
  include 'includes/footer.php';
?>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  $_SESSION['loggedin'] = false;
}
include 'db.php';
?>
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

          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" />
      <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" />
          
          
      <!-- MDB -->
      <link rel="stylesheet" href="css/mdb.min.css" />

      <!-- Style -->
      <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
    /* Google Font Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins" , sans-serif;
    }
    .sidebar{
      position: fixed;
      left: 0;
      top: 0;
      height: 100%;
      width: 78px;
      background: #11101D;
      padding: 6px 14px;
      z-index: 99;
      transition: all 0.5s ease;
    }
    .sidebar.open{
      width: 250px;
    }
    .sidebar .logo-details{
      height: 60px;
      display: flex;
      align-items: center;
      position: relative;
    }
    .sidebar .logo-details .icon{
      opacity: 0;
      transition: all 0.5s ease;
    }
    .sidebar .logo-details .logo_name{
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      opacity: 0;
      transition: all 0.5s ease;
    }
    .sidebar.open .logo-details .icon,
    .sidebar.open .logo-details .logo_name{
      opacity: 1;
    }
    .sidebar .logo-details #btn{
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      font-size: 22px;
      transition: all 0.4s ease;
      font-size: 23px;
      text-align: center;
      cursor: pointer;
      transition: all 0.5s ease;
    }
    .sidebar.open .logo-details #btn{
      text-align: right;
    }
    .sidebar i{
      color: #fff;
      height: 60px;
      min-width: 50px;
      font-size: 28px;
      text-align: center;
      line-height: 60px;
    }
    .sidebar .nav-list{
      margin-top: 20px;
      height: 100%;
    }
    .sidebar li{
      position: relative;
      margin: 8px 0;
      list-style: none;
    }
    .sidebar li .tooltip{
      position: absolute;
      top: -20px;
      left: calc(100% + 15px);
      z-index: 3;
      background: #fff;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
      padding: 6px 12px;
      border-radius: 4px;
      font-size: 15px;
      font-weight: 400;
      opacity: 0;
      white-space: nowrap;
      pointer-events: none;
      transition: 0s;
    }
    .sidebar li:hover .tooltip{
      opacity: 1;
      pointer-events: auto;
      transition: all 0.4s ease;
      top: 50%;
      transform: translateY(-50%);
    }
    .sidebar.open li .tooltip{
      display: none;
    }
    .sidebar input{
      font-size: 15px;
      color: #FFF;
      font-weight: 400;
      outline: none;
      height: 50px;
      width: 100%;
      width: 50px;
      border: none;
      border-radius: 12px;
      transition: all 0.5s ease;
      background: #1d1b31;
    }
    .sidebar.open input{
      padding: 0 20px 0 50px;
      width: 100%;
    }
    .sidebar .fa-search{
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      font-size: 22px;
      background: #1d1b31;
      color: #FFF;
    }
    .sidebar.open .fa-search:hover{
      background: #1d1b31;
      color: #FFF;
    }
    .sidebar .fa-search:hover{
      background: #FFF;
      color: #11101d;
    }
    .sidebar li a{
      display: flex;
      height: 100%;
      width: 100%;
      border-radius: 12px;
      align-items: center;
      text-decoration: none;
      transition: all 0.4s ease;
      background: #11101D;
    }
    .sidebar li a:hover{
      background: #FFF;
    }
    .sidebar li a .links_name{
      color: #fff;
      font-size: 15px;
      font-weight: 400;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: 0.4s;
    }
    .sidebar.open li a .links_name{
      opacity: 1;
      pointer-events: auto;
    }
    .sidebar li a:hover .links_name,
    .sidebar li a:hover i{
      transition: all 0.5s ease;
      color: #11101D;
    }
    .sidebar li i{
      height: 50px;
      line-height: 50px;
      font-size: 18px;
      border-radius: 12px;
    }
    .sidebar li.profile{
      position: fixed;
      height: 60px;
      width: 78px;
      left: 0;
      bottom: -8px;
      padding: 10px 14px;
      background: #1d1b31;
      transition: all 0.5s ease;
      overflow: hidden;
    }
    .sidebar.open li.profile{
      width: 250px;
    }
    .sidebar li .profile-details{
      display: flex;
      align-items: center;
      flex-wrap: nowrap;
    }
    .sidebar li img{
      height: 45px;
      width: 45px;
      object-fit: cover;
      border-radius: 6px;
      margin-right: 10px;
    }
    .sidebar li.profile .name,
    .sidebar li.profile .job{
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      white-space: nowrap;
    }
    .sidebar li.profile .job{
      font-size: 12px;
    }
    .sidebar .profile #log_out{
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      background: #1d1b31;
      width: 100%;
      height: 60px;
      line-height: 60px;
      border-radius: 0px;
      transition: all 0.5s ease;
    }
    .sidebar.open .profile #log_out{
      width: 50px;
      background: none;
    }
    .home-section{
      position: relative;
      background: rgb(17 16 29);
      min-height: 100vh;
      top: 0;
      left: 78px;
      width: calc(100% - 78px);
      transition: all 0.5s ease;
      z-index: 2;
    }
    .sidebar.open ~ .home-section{
      left: 250px;
      width: calc(100% - 250px);
    }
    .home-section .text{
      display: inline-block;
      color: #11101d;
      font-size: 25px;
      font-weight: 500;
      margin: 18px
    }
    ul.nav-list {
        padding: 0;
    }
    a{
    text-decoration: none;
    color: white;
    }
    a:hover{
        color: white;
    }
    input {
      font-size: 15px;
      color: #FFF;
      font-weight: 400;
      outline: none;
      height: 50px;
      width: 100%;
      border: none;
      border-radius: 12px;
      transition: all 0.5s ease;
      background: #1d1b31;
      padding: 0 50px;
    }
    i.fas.fa-search {
    position: absolute;
    top: 5%;
    left: 7%;
    }
    @media (max-width: 420px) {
      .sidebar li .tooltip{
        display: none;
      }
    }

  </style>
  <link rel="stylesheet" href="css/admin.css">   
  <body>
    <div class="sidebar">
      <div class="logo-details"> 
          <div class="logo_name"><a href="Homepage.php">NewMovies</a></div>
          <i class="fa fa-bars" aria-hidden="true" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
        <a href="Homepage.php">
          <i class='bx bx-folder' ></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Files</span>
      </li>
        <li>
        <a href="#">
          <i class='bx bx-folder' ></i>
          <span class="links_name">File Manager</span>
        </a>
        <span class="tooltip">Files</span>
      </li>

      <!-- old upload -->
      <li>
        <a href="upload.php">
          <i class='bx bx-folder' ></i>
          <span class="links_name">Upload Movie</span>
        </a>
        <span class="tooltip">Files</span>
      </li> 

      <!-- new upload -->
      <!-- ------------------------------------form upload------------------------------------ -->
      <!-- <li>
        <a href="upload2.php">
          <i class='bx bx-folder' ></i>
          <span class="links_name">Upload Movie</span>
        </a>
        <button
          type="button"
          class='bx bx-folder'
          data-mdb-toggle="modal"
          data-mdb-target="#exampleModal"
          data-mdb-whatever="@mdo"
        > Add NewMovies</button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>

        Thay doi form
      <div class="modal-body">
        <form>
        Name
        <div class="mb-3">
            <label for="Movie-name" class="col-form-label">Movie Name</label>
            <input type="text" class="form-control" id="movie-name" />
        </div>
        Description
        <div class="mb-3">
            <label for="Movie-Description" class="col-form-label">Movie Description:</label>
            <textarea class="form-control" id="movie-description"></textarea>
        </div>
        Up Image
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose Image For Movie</label>
            <input class="form-control" type="file" id="movie-image">
        </div>
        Up Video
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose Video For Movie</label>
             <input class="form-control" type="file" id="movie-video">
        </div>          

        </form>
      </div>
      Thay doi form


      <div class="modal-footer">        
        <button class="upload_btn" type="button" class="btn btn-primary">Add New Movie</button>
      </div>
    </div>
  </div>
</div>



        <span class="tooltip">Files</span>
      </li> -->

      <!-- ------------------------------------form upload------------------------------------ -->


      <li class="profile">
          <div class="profile-details">
            <!--<img src="profile.jpg" alt="profileImg">-->
            <div class="name_job">
              <div class="name">Admin: CoftBred</div>
              <div class="job">Web designer</div>
            </div>
          </div>
          <i class='bx bx-log-out' id="log_out" ></i>
      </li>
      </ul>
    </div>
    <section class="home-section">
    <div class="container pt-lg-5 ">
      <div>
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
      </div>
              <!-- <div class="container"> -->
                  <div class="row">
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark"><a href="editMovie.php"> Edit</a> <i class="fa-solid fa-pen-to-square"></i></button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                          <div class="card">
                              <img src="images/thor-love-and-thunder-poster.jpg" alt="">       
                                  <h1>Thỏ bay màu</h1>
                                  <h3>
                                  <span>
                                  2022 ‧ Action/Adventure
                                  </span>
                                  </h3>
                                  <br>
                                  <p>
                                  <span>
                                      <div class="row">
                                          <div class="col-md-6"> <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Edit</button></div>
                                          <div class="col-md-6"> <a href="Watchmovie.php">
                                          <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Delete</button>
                                          </a></div>
                                      </div>
                                  </span>
                                  </p>
                          </div>
                      </div>
                  </div>

    </section>



    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".fa-search");

    closeBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("open");
      menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
    if(sidebar.classList.contains("open")){
      closeBtn.classList.replace("fa-searchfa-bars", "fa-searchfa-bars-alt-right");//replacing the iocns class
    }else {
      closeBtn.classList.replace("fa-searchfa-bars-alt-right","fa-searchfa-bars");//replacing the iocns class
    }
    }
    </script>
  </body>
  <!-- End of the body -->
    <!-- FOOTER -->
    <footer>
      <p>&copy NewMovies fa-inverse, Inc.</p>
      <p>GroupI &copy 2022</p>
    </footer>
  </div>



  <script>
      // Get the video
      var video = document.getElementById("myVideo");
      
      // Get the button
      var btn = document.getElementById("myBtn");
      
      // Pause and play the video, and change the button text
      function myFunction() {
        if (video.paused) {
          video.play();
          btn.innerHTML = "Pause";
        } else {
          video.pause();
          btn.innerHTML = "Play";
        }
      }
      </script>

  


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <!-- Read more -->
    <script type="text/javascript" src="js/watch.js"></script>
    <script type="text/javascript" src="js/edit.js"></script>
    <script src="js/view.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2
            },
            400: {
                items: 3
            },
            400: {
                items: 4
            },
        }
    })
</script>
  </body>
</html>
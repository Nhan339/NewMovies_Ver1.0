<?php 
  include 'includes/header.php';
  include 'classes/comment.php';
  include 'classes/reply.php';
  include 'classes/movie.php';
var_dump($_POST);
  if(isset($_GET['id'])) {
    $theid = $_GET['id'];
    $comments = new Comment($theid, $conn);
    $comments->getComments();
    $replies = new Reply($theid, $conn);
    $replies->getReplies();
  }
?>
<link rel="stylesheet" href="css/watch.css">

<!-- Watch movie -->
<div class="watch">
<video autoplay muted loop id="myVideo">
        <source src="images/Marvel Studios' Thor_ Love and Thunder - Teaser Trailer (2022) Chris Hemsworth, Natalie Portman.mp4" type="video/mp4">
</video>
    <h1 style=" padding-left: 10px">Thor and Thunder</h1>
    <h2 style="padding-left: 10px">Tóm tắt</h1>
    <p style="padding-left: 10px">bla bla bla bla bla bla bla bla bla bla</p>
    <span></span>
    <div class="space" style="padding-top: 5rem;">
</div>
<!-- End of watch movie -->

<!-- Comments -->
<hr>
      <h3 class="display-4 mt-3 mb-3">Comments</h3>
      <hr>
      <?php if ($_SESSION['loggedin']): ?>
      <div class="row comment-form">
        <div class="col-md-8 form">
          <form class="comment-form" method="POST" action="function/manager.php">
            <textarea name="comment-text" class="form-control" rows="4" cols="80"></textarea>
            <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
            <button type="submit" name="comment-submit" class="comment-submit btn btn-outline-success mt-2"><i class="far fa-comment"></i>Add Comment</button>
          </form>
        </div>
      </div>

     <div class="row comments">
           <?php $comments->outputComments($replies);?>
           
         <?php else: ?>
           <h3>Please login to comment!</h3>
           <a href="login.php"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
         <?php endif; ?>
     </div>


<!-- Similar Content -->
<div class="container-fluid pt-lg-5">
  <div class="tile">
    <h2 style="color: orange;" >Similar content:</h2>
  </div>
  <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>


<?php
 $queryIDCount = count($_SESSION['query_history']) -2;
 $queryStrPos = strpos($_SESSION['query_history'][$queryIDCount],"id");
 $queryId = substr($_SESSION['query_history'][$queryIDCount],$queryStrPos);
 $queryId = explode("=", $queryId);
 include 'includes/footer.php';
  ?>
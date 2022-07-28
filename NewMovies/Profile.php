<?php 
  include 'includes/adminheader.php';
  include 'classes/user.php';
  //var_dump($_SESSION['user_name']);
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="css/Profile.css">   
<Style>
      i.fa.fa-camera {
    position: absolute;
    top: 19%;
    left: 22%;
    color: lightgray;
  }
  i.fa.fa-camera:hover {
    position: absolute;
    top: 19%;
    left: 22%;
    color: black;
  }
  .btn1 {
    width: 26px;
    height: 26px;
    background: white;
    border-radius: 50%;
    position: absolute;
    top: 17%;
    left: 707px;
    border: none;
}
</Style>
    <div class="container-profile">
      <div class="cover-photo">
        <img id="image" src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" class="profile">
      </div>
      <div>
      <!-- data-mdb-toggle="tooltip" title="Edit the picture" data-mdb-placement="bottom" -->
        <button type="button" class="btn1" data-mdb-toggle="modal" data-mdb-target="#exampleModal"
        data-mdb-whatever="@fat" ><i class="fa fa-camera" aria-hidden="true"></i></button>
      </div>
      <div class="profile-name"><?php echo htmlspecialchars($_SESSION['user_name']) ?></div>
      <p class="about">User Interface Designer and<br>front-end developer</p>
      <button class="follow-btn">Update</button>
    </div>

    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Imange</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Image:</label>
              <input type="file" class="form-control" id="recipient-name" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>    
</body>
</html>
<?php 
  include 'includes/footer.php';
?>
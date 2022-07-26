<?php 
  include 'includes/adminheader.php';
?>
<link rel="stylesheet" href="css/Profile.css">   
<Style>
    img:hover{
    
    -webkit-transition: opacity 3s ease-in-out;
    -moz-transition: opacity 3s ease-in-out;
    -o-transition: opacity 3s ease-in-out;
    transition: opacity 3s ease-in-out;
  }
</Style>
    <div class="container-profile">
      <div class="cover-photo">
        <img src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" class="profile">
      </div>
      <div class="profile-name">Beni Smith</div>
      <p class="about">User Interface Designer and<br>front-end developer</p>
      <button class="follow-btn">Update</button>
    </div>
<?php 
  include 'includes/footer.php';
?>
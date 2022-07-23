<?php
  session_start();
  include 'classes/Videos.php';
  include "db_conn.php";
  if(isset($_POST['submit']) && isset($_FILES['my_video'])) {
	$video_name = $_FILES['my_video']['name'];
	$vid_name = $_POST['vname'];
	$tmp_name = $_FILES['my_video']['tmp_name'];
	$error = $_FILES['my_video']['error'];
	
	$film = new videos($conn);
	$film->Upload();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>video upload php and mysql</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		input {
			font-size: 2rem;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<a href="view.php">Videos</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>

	
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">

		<input type="text"
	 	       name="vname">
	 	<input type="file"
	 	       name="my_video">


	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>
</body>
</html>
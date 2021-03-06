<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<style>
		body {
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		video {
			width: 100%;
			height: 640px;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<a href="uploadUI.php">UPLOAD</a>
	<div class="alb">
		<?php 
		 include "db_conn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);
		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <video src="uploads/<?=$video['video_url']?>" controls>
	        	
	        </video>
			<?php echo $video['video_name']; ?>
			<a class="btn btn-outline-light" href="editMovie">Edit <i class="fa-solid fa-pen-to-square"></i></a>
	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
</body>
</html>
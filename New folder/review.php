<?php
	error_reporting(E_PARSE);
	session_start();
	require 'conectare.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>INFO | SHARING</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="icon" href="static/images/icon.ico">
	<script src="https://kit.fontawesome.com/69947885df.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans&display=swap" rel="stylesheet">
	<meta name="viewport" content = "width=device-width,initial-scale=1.0";>
	<link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Poppins&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/69947885df.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="backgroun-color:#1c1b1b;">
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php">INFO | SHARING</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="post.php">Upload</a>
		     </li>
		     <li class="nav-item active">
		        <a class="nav-link" href="https://www.pbinfo.ro">Pbinfo.ro</a>
		     </li>
		 	</ul>
		  </div>
	</nav>
	<div class="container" style="margin-top:100px;">
		<h1>Reviews</h1><a href="makeareview.php"><p>Make a review</p></a>
 		<div class="card">
 			<?php
 			$i = 0;
			$sql = "SELECT MAX(id) FROM review";
 			$result = mysqli_query($conectare,$sql);
 			$row = $result->fetch_assoc();
 			$row['MAX(id)'];
 			for($i = $row['MAX(id)']; $i > 0 ; $i--) {
 				$sql = "SELECT * FROM review WHERE id = '$i'";
 				$result = mysqli_query($conectare,$sql);
 				$row = $result->fetch_assoc();
 				$color = "primary";
 				$color2 = "danger";
 				$succes = "0";
 				$clasa = "LOW";
 				if($row['clasa'] == '1')
 				{
 					$row['clasa'] = "VIP";
 					$color = "dark";
 				}
 				else
 					if($row['clasa'] == '2'){
 						$row['clasa'] = "USER";
 						$color = "primary";
 					} else {
 						if($row['clasa'] == '3'){
 						$row['clasa'] = "UPLOADER";
 						$color = "success";
 					}
 					}
 				if($row['review'] == '3')
 				{
 					$clasa = "SUPER OK";
 					$succes = "100";
 					$color2 = "danger";
 				}
 				else
 					if($row['review'] == '2'){
 						$succes = "50";
 						$clasa = "OK";
 						$color2 = "success";
 					}
	 			echo '
		  			<div class="card-body">
		    			<div class="card">
				  <div class="card-header">
				     <img src="static/images/photo.png" class="align-self-start mr-3" style="width:64px;height:64px;">'.$row['nume'].' <span class="badge badge-'.$color.'">'.$row['clasa'].'</span>
				  </div>
				  <div class="card-body">
				    <div class="progress" style="height: 25px; border-radius: 5px; color:yellow;">
		  				<div class="progress-bar progress-bar-striped bg-'.$color2.'" role="progressbar" style="width:'.$succes.'%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><h1 style="margin:5px; font-size:20px;">'.$clasa.'</h1></div>
					</div>
				  </div>
					</div>
		  			</div>';
	  		}
  			?>

		</div>
	</div>
	<br><br>
	<br><br>
</body>
<script>
	$(document).keydown(function(e){
	    if(e.which === 123){
	 
	       return false;
	 
	    }
 	});
 	$(document).bind("contextmenu",function(e) { 
	e.preventDefault();
	});
</script>
</html>
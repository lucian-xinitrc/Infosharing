<?php
	error_reporting(E_PARSE);
	session_start();
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
		<form method="POST" action="review.inc.php">
		<h1>Make a review</h1>
		<div class="card" style="padding:15px;">
			<input class="form-control" name = "nume" type="text" placeholder="Username">	
			<br>
			<button type="submit" class="btn btn-outline-dark">Post</button>	
			<div class="form-group">
    		<label for="exampleFormControlSelect1">Example select</label>
    			<select class="form-control" name = "number" id="exampleFormControlSelect1">
     				 <option>LOW</option>
      				 <option>OK</option>
      				 <option>SUPER OK</option>
    			</select>
  			</div>
		</div>
		</form>
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
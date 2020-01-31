<?php
	error_reporting(E_PARSE);
	session_start();
	$key = $_POST['key'];
 	if($key == "BAMBUSER")
 	{	
 		header("Location: index.php?info=vip");
 	}
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
		     <li class="nav-item active">
		        <a class="nav-link" href="review.php">From our users</a>
		     </li>
		 	</ul>
		  </div>
		  <form method="POST" action="index.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="key" name = "key" aria-label="Search">
      <input class="btn btn-outline-success my-2 my-sm-0" name="button" type="submit">	
    </form>
	</nav>
	<div class="container" style="margin-top:100px;">
		<?php 
			if(isset($_GET['info']) && $_GET['info'] == vip){
				echo '<p class="h1" style="padding:15px;">Website commands<span class="badge badge-dark" style="margin:5px;">VIP Class </span></p>';
			}
			else{
				echo '<p class="h1" style="padding:15px;">Search for a solution</p>';
			}
		?>
		<div class="col" style="float:right;">
			<form method="POST" action="search.inc.php">
				<div class="input-group mb-3">
				  <input type="text" name="id" class="form-control" placeholder="write" aria-label="Recipient's username" aria-describedby="button-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-outline-dark" type="submit" id="button-addon2">Search</button>
				  </div>
			</form>
		 </div>
	</div>
	<div class="col" style="float:left;">
			<?php
			if(!isset($_GET['info']))
			{
				echo '
				<div class="card">
					<div class="card-body">
						Just write problem id into search box and problem solution will appear here
					</div>
				</div>';
			}else{
				if(isset($_GET['info']) && $_GET['info'] == notfound)
				{
					echo '<div class="card">
							  <div class="card-header">
							   	Error : 404
							  </div>
							  <ul class="list-group list-group-flush">
							    <li class="list-group-item">Solution not found</li>
							  </ul>
							</div>';
				} else {
					if(isset($_GET['info']) && $_GET['info'] == vip){
						echo '<div class="card" style="padding:15px;">
								<div class="card" style="margin-bottom:10px;">
  									<div class="card-body">
    									<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Commands">
 									 </div>
								</div>
								<div class="card" style="margin-bottom:10px;">
  									<div class="card-body">
    									
 									 </div>
								</div>
							</div>';
					} else {
						if(isset($_GET['info']) && $_GET['info'] == id){
						if($_SESSION['username'] == "lorin23" || $_SESSION['username'] == "damidum" ){
							echo '<div class="card">
							<div class="card-header">'.$_SESSION['name'].'</div>
							<div class="card-body"><iframe class="iframe" src="'.$_SESSION['location'].'" frameborder="0" width="95%"></iframe></div>
							<div class="card-header">Uploaded by : '.$_SESSION['username'].'<span class="badge badge-dark" style ="margin-left:10px;">VIP</span> <a class="btn btn-outline-dark" style="float:right;"href="'.$_SESSION['location'].'" download>Download</a></div>
							</div>';
						} else {
							if($_SESSION['username'] == "pr0fh3cy"){
							echo '<div class="card">
							<div class="card-header">'.$_SESSION['name'].'</div>
							<div class="card-body"><iframe class="iframe" src="'.$_SESSION['location'].'" frameborder="0" width="95%"></iframe></div>
							<div class="card-header">Uploaded by : '.$_SESSION['username'].'<span class="badge badge-danger" style ="margin-left:10px;">OWNER</span> <a class="btn btn-outline-dark" style="float:right;"href="'.$_SESSION['location'].'" download>Download</a></div>
							</div>';
							} else {
								echo '<div class="card">
								<div class="card-header">'.$_SESSION['name'].'</div>
								<div class="card-body"><iframe class="iframe" src="'.$_SESSION['location'].'" frameborder="0" width="95%"></iframe></div>
								<div class="card-header">Uploader: '.$_SESSION['username'].'<span class="badge badge-primary" style ="margin-left:10px;">USER</span> <a class="btn btn-outline-dark" style="float:right;"href="'.$_SESSION['location'].'" download>Download</a></div>
								</div>';
							}
							}
						
						}
					}
				}
			}
		?>
	</div>
</div>
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

<?php

	require 'conectare.php';

	$id = $_POST['id'];
 	$name = $_POST['problem'];
 	$username = $_POST['username'];
 	if(isset($_POST['upload']))
 	{
 		$file_name = $_FILES['file']['name'];
 		$file_type = $_FILES['file']['type'];
 		$file_size = $_FILES['file']['size'];
 		$file_tem_loc = $_FILES['file']['tmp_name'];
 		$file_name = $id;
 		$file_store = "uploadfolder/".$file_name.".cpp";

 		move_uploaded_file($file_tem_loc, $file_store);
 	}
 	
 	
 	$sql = "SELECT id FROM post WHERE id = '$id'";
 	$result = mysqli_query($conectare, $sql);
 	$check = mysqli_num_rows($result);
	
 	if($check > 0){
 		 header("Location: post.php?info=exista");;
	
 	} else {
 			$sql = "INSERT INTO post (id, nume, username, location) VALUES ('$id', '$name', '$username', '$file_store')";
 			$result = mysqli_query($conectare, $sql);
 			header("Location: post.php?info=posted");
 	}

 ?>
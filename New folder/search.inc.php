<?php
		session_start();

		require 'conectare.php';
if(!empty($_POST['id']) && isset($_POST['id'])){

	$id = $_POST['id'];
	$sql = "SELECT * FROM post WHERE id = '$id'";
	$result = mysqli_query($conectare, $sql);
	$row = $result->fetch_assoc();

	$sql1 = "SELECT id FROM post WHERE id = '$id'";
	$result1 = mysqli_query($conectare, $sql1);
	$check = mysqli_num_rows($result1);

	if($check < 1){
		header("Location: index.php?info=notfound");
	} else {
		$_SESSION['name'] = $row['nume'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['location'] = $row['location'];
		header("Location: index.php?info=id");
	}
} else {
	header("Location: index.php?info=notfound");
}


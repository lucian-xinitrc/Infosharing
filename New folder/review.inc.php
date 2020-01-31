<?php 

	require 'conectare.php';
	$nume = $_POST['nume'];
	$class = "2" ;
	$number = $_POST['number'];
	$review;	
	if($number == "LOW"){
		$review = "1";
		
	} else {
		if($number == "OK"){
			$review = "2";
		} else {
			if($number == "SUPER OK"){
				$review = "3";
			}
		}

	}
	if($nume == "lorin23" || $nume == "Gabiii2003" || $nume == "damidum"){
		$class = "1";
	} else {
		if($nume == "Cry5ty4n")
			$class = "3";
	}
	$sql = "INSERT INTO review (nume, review, clasa) VALUES ('$nume', '$review', '$class')";
	$result = mysqli_query($conectare,$sql);
	header("Location: review.php");
?>
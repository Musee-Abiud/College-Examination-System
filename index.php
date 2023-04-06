<?php
	session_start();

	include("Database/config.php");

	$sql = "SELECT COUNT(DISTINCT User_id) AS users FROM users";
	$runquery = mysqli_query($conn, $sql);
	while($count = mysqli_fetch_assoc($runquery)){
		$availableusers = $count['users'];
	}

	if($availableusers < 1){
		header("location: login/FirstTimeLogin.php");
		exit();
	}
	elseif(isset($_SESSION['Admin'])){
		header("location: Admin/");
		exit();
	}
	elseif(isset($_SESSION['ExamOfficer'])){
		header("location: ExamOfficer/");
		exit();
	}
	elseif(isset($_SESSION['DepartmentHead'])){
		header("location: DepartmentHead/");
		exit();
	}
	elseif(isset($_SESSION['Trainer'])){
		header("location: Trainer/");
		exit();
	}
	else{
		header("location: login-page.php");
		exit();
	}
?>
<?php 
	require_once("user.php");

	if (!empty($_GET)) {
		// code...
		// $id = $_GET['id']??'';
		var_dump($_GET);
		$user = $_GET;

 $users = User::updateProfile($user);
      echo "successful";
      $user =User::find($_GET['id']);
      var_dump($user);

     header("Location: profile.php?id=".$_GET['id']);


	}



 ?>
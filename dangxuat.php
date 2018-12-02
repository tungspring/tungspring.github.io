<?php 
	if(!session_start())
		session_start();

	unset($_SESSION['tk']);
	header('Location:dangnhap.php');
 ?>
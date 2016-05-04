<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include 'db.php';

		$login = $_POST['login'];
		$password = $_POST['password'];
		
		//echo login + password;

		$query = $connection->query("SELECT * FROM users 
									 WHERE login = \"".$login."\" AND 
									 	   password = \"".sha1($password)."\" 
									 	   AND active = 1");

		if($row=$query->fetch_object()){


			header("Location:../posts2.htm");	
				

		}else{

			header("Location:login.htm");

		}

	}


?>
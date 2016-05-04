<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		include 'db.php';

		$login = $_POST['login'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$age = $_POST['age'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];

		if($pass1==$pass2){

			$sql_text= "
				INSERT INTO users(id,login,password,name,surname,age,active) 
				VALUES (NULL,\"".$login."\",\"".sha1($pass1)."\",\"".$name."\",\"".$surname."\",".$age.",1)";

				$connection->query($sql_text);
			header("Location:index.php");

		}else{header("Location:register.php");}
	}

 ?>
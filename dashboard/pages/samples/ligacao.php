<?php

session_start();

if (isset($_POST['submit'])) {
	echo "entrou aqui";
	if ($_POST["username"] === "user" && $_POST["pass"] === "pass" ) {
		$_SESSION["username"] = "user";
		$_SESSION["pass"] = "pass";
		$_SESSION["login"] = 1;
		header("Location: ../poslogin/html/gestock.php");
        die();
	} else {
		echo "aqui também entrou";
		header("Location: erro.html");
		die();
	}
}

?>
  

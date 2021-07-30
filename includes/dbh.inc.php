<?php
	
	/*$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "tagd'noteslogin";*/

	$servername = "sql204.epizy.com";
	$dbUsername = "epiz_25787290";
	$dbPassword = "EhqBv3PCqarsB";
	$dbName = "epiz_25787290_tagdnoteslogin";
	


	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
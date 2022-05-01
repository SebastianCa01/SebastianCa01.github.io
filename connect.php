<?php
	
	//Connection parameters
 	$dbHost = "localhost";
	$dbPort = "15432";
	$dbName = "projecttest2";
	$dbUser = "postgres";
	$dbUserPassword = "Rylen2020*";

	$connection_info = "host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$dbUserPassword";
	$conn = pg_connect($connection_info) or die ("Connection has failed");
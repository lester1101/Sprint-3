<?php

$user = 'newsletter';		//to access the database in php admin
$password = 'newsletter';
$host = 'localhost';
$dbase = 'newsletter';
$table = 'subscribers';

//Connect to database
$dbc = mysqli_connect($host, $user, $password, $dbase)
	or die("Unable to connect");

//If there is no table exist, then it will create one
$query = "CREATE TABLE IF NOT EXISTS $table ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` TEXT NULL , `Email` TEXT NOT NULL , `Date` DATE NOT NULL , PRIMARY KEY (`ID`), UNIQUE `uniqueemail` (`Email`)) ENGINE = InnoDB;";
		
$result = mysqli_query($dbc, $query)	//error catcher
	or die('Error creating table. ' . mysqli_error($dbc));
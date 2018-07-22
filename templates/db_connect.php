<?php

	function db_connect($db_name){	//creates the function db_connect so we can connect to the server
									//the variable $db_name is used to indicate the database that is to be connected to
									//when this function is called, the name of the database that is to be opened is passed into the function as the variable $db_name

		$host_name = "localhost";	//defines the variable $host_name and making it equal to the servername "localhost"
	   								//this will be used to tell the function to connect to the database through this port

		$user_name = "root";	//defines the variable $user_name and makes it equal to the username for the database- "root"
		   						//this variable is then used in the function to open the database

		$password = "Conor";	//defines the variable $password and makes the password for the database ("usbw") equal to it
	   						// this variable can then be passed into the function as an argument and used to open the database

		$db_link = mysqli_connect($host_name, $user_name, $password)	//defines the variable $db_link that will create the link to the database
	   																//this variable is then made equal to the mysql_connect function that is used to connect to the database
	   																//the $host_name, $user_name and $password variables are then passed into the function
	   																//these variables are passed into the mysql_connect function as the servername, username and password of the database

			or die("Could not connect to $host_name");	//gives an error message if the function could not connect to the database
	      												//uses the $host_name variable as part of the error message to indicate to the user that the connection failed to connect to the localhost

		mysqli_select_db($db_link, $db_name)	//calling the function mysql_select_db to select the database that has been connected to
									//using the variable $db_name to indicate the database that is to be connected to
									//the $db_name variable has already been defined with the database name when the db_connect function was called

			or die("Could not select database $db_name");	//gives an error message if the function could not select the database
																		//uses the $db_name variable as part of the error message to relay to the user which database could not be connected to

		return $db_link;	//returns the link to the database

	   }	//close the db_connect function

?>
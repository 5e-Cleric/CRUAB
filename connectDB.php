<?php
	$server = "localhost";//"hl1136.dinaserver.com";//
	$username = "root";//"admin_suprem";//
	$password = "root";//"Renunciode-36";//
	$dbname = "cruab_dataset";
	$conn = mysqli_connect($server, $username, $password, $dbname);
	$conn->set_charset("utf8");
	//echo "cc\n";
	if (!$conn) {
	    console_log("Connect failed: %s\n".$conn->connect_error);
	    //echo "AA";
	    exit();
	}
	else
	{
		//console_log("Connect worked");
		//echo "hw_GetChildColl(connection, objectID)";
	}
?>
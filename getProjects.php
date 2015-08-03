<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "angular";

	$connect = new mysqli($servername, $username, $password, $database);

	if ($connect->connect_error) {

		die('connection failed' . $connect_error);
	}
	
    $query  = "select * from tbl_projects";
    $result = $connect->query($query) or die($connect->error.__LINE__);

    $arr = array();

    if ($result->num_rows > 0) {
    		while ($row = $result->fetch_assoc()) {
    			$arr[] = $row;
    		}
    	}	

   echo $json_response = json_encode($arr); 	
 ?>
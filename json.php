<?php
    include 'configdb.php';

    //fetch table rows from mysql db
    $result = $mysqli->query("select * from jalan");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/jalan.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
?>
<?php
	
	header("Access-Control-Allow-Origin:*");
	require_once("dbtools.php");
	$link = connection();

	$sql = "select * from product_M order by ID desc";
	$result = execute_sql($link,"b9_19858225_safe",$sql);
	$total_records = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	
	do{
		$rowarray[] = $row;
	}
	while ( $row = mysqli_fetch_assoc($result));{
		echo json_encode($rowarray);
	}
	
?>
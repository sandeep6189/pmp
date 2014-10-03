<?php

ini_set('display_errors', '1');

$category = $_POST["category"];
//echo $category;
include_once("config.inc.php");

	if (mysqli_connect_errno()) {
 		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}					
	else
	{	
		
		
			$sql_query1 ="
				SELECT * 
				FROM  `top_free_apps`
				WHERE genre = '".$category."' 
				LIMIT 0 , 5
			";

			$sql_query2 ="
				SELECT * 
				FROM  `top_paid_apps`
				WHERE genre = '".$category."' 
				LIMIT 0 , 5
			";
			

			 $result1=mysqli_query($con,$sql_query1);
 			
 			 $result2=mysqli_query($con,$sql_query2);
 			 $join_row1=mysqli_fetch_all($result2,MYSQLI_ASSOC);  
 			 $join_row2=mysqli_fetch_all($result1,MYSQLI_ASSOC);  
 			 $join_row = array_merge($join_row1,$join_row2);

			//$rows=mysqli_fetch_all($result,MYSQLI_NUM);
		echo json_encode($join_row);
	}
?>
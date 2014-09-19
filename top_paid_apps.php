<?php


$query = $_POST["query"];

$con= mysqli_connect('localhost','root','admin','top_paid_apps');	

	if (mysqli_connect_errno()) {
 		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}					
	else
	{	
		
		
			$sql_query_2 = "
				SELECT app_desc.app_name, images.icon, images.screenshot, rating.avg_rating, rating.rating_count,bundle.track_url
				FROM app_desc
				INNER JOIN images ON app_desc.bundle_id = images.bundle_id
				INNER JOIN rating ON images.bundle_id = rating.bundle_id
				INNER JOIN bundle ON rating.bundle_id = bundle.bundle_id
				LIMIT 10
			";

 			 $result2=mysqli_query($con,$sql_query_2);
 			 $join_row=mysqli_fetch_all($result2,MYSQLI_ASSOC);  


			//$rows=mysqli_fetch_all($result,MYSQLI_NUM);
		echo json_encode($join_row);
	}
?>
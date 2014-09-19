<?php

//ini_set('display_errors', '1');

$top_apps = array("284882215","333903271","429047995","544007664","284815942","585027354","422689480","535886823","535886823","507874739","414706506","842842640","386244833","284910350");

$con = mysqli_connect('localhost','root','admin','ios');

if(mysqli_connect_errno()) {
 		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}					
	else
	{
		//echo "string";
		$response  = array();
		foreach($top_apps as $i => $value)
		{
			$sql = "
				SELECT app_desc.app_name, images.icon, images.screenshot, rating.avg_rating, rating.rating_count,bundle.track_url
				FROM app_desc
				INNER JOIN images ON app_desc.bundle_id = images.bundle_id
				INNER JOIN rating ON images.bundle_id = rating.bundle_id
				INNER JOIN bundle ON rating.bundle_id = bundle.bundle_id
				WHERE app_desc.bundle_id =  '".$top_apps[$i]."'
				LIMIT 10
			";

			 //echo $sql_query_2.'<br><br>';

 			 
 			 $aee = mysqli_query($con,$sql);

 			 //echo $aee;

 			 $join_row=mysqli_fetch_array($aee,MYSQLI_ASSOC);  
 			 //echo $join_row;
 			 array_push($response, $join_row);
 		}
 		print_r(json_encode($response));
	}

?>
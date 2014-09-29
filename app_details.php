<?php

ini_set('display_errors', '1');



		$url = $_POST['url'];
		$img_src = $_POST['img_src'];
		$id = $_POST['id'];
		$div_id = $_POST['div_id'];
	//make an sql query to get the app name !
		$con= mysqli_connect('localhost','root','admin','pmp');	

			

			$sql_query_2 ="
				SELECT * 
				FROM  `top_paid_apps` 
				WHERE bundle_id = ".$id."
				UNION
				SELECT *
				FROM  `top_free_apps`
				WHERE bundle_id = ".$id."
			";

 			 $result2=mysqli_query($con,$sql_query_2);
             $join_row=mysqli_fetch_array($result2,MYSQLI_ASSOC);  

            $app_name = $join_row['app_name'];
            $version = $join_row['version'];
            $genre = $join_row['genre'];

            if(strlen($app_name)>16)
            {
            	$app_name = substr($app_name,0,14)."...";
            }



echo <<< END

<div style='width:100%;height:100%;background:#222;color:#fff;margin:0px'>
	<div class='mobile-row2' style='width:100%;height:10%;text-align:center;position:relative'>
		<h4 class='info-pmp'>
			Inside App
		</h4>
		<div id='back'>
			<div class='arrow-left'>
			</div>
			<div class='rect'>
			<span class='rect-text'>Back</span>
			</div>
		</div>
	</div>

	<div class='mobile-row2' style='width:100%;height:17%;text-align:center;position:relative;margin-top:10px'>
			<ul style='margin:0px'>
				<li class='mob_lis' style='left:0px'>

				<a href='$url'><img src='$img_src' width=50 height=50 style='margin:10px;border-radius: 6px;border: 2px solid beige;'></a>
				
				</li>
				
				<li class='mob_lis' style='left:24%;top:10px;font-weight:bolder;font-size:smaller;width:50%;'>
						<div style='margin-left:16%;float:left'>$app_name</div><br>
						<div style='font-weight:100;margin-left:16%;float:left'>$version</div><br>
						<div style='font-weight:100;margin-left:16%;float:left;font-size:10px'>$genre</div>
				</li>
				
				<li class='mob_lis' style='right:0px'>
					<p id="app_ratings" style='margin-top:20px;font-size:12px'>
                	<img src="img/full.png" alt="" style="height:12px">
                	<img src="img/full.png" alt="" style="height:12px">
                	<img src="img/empty.png" alt="" style="height:12px">
                	<img src="img/empty.png" alt="" style="height:12px">
                	<img src="img/empty.png" alt="" style="height:12px">
              </p>	
				</li>
			</ul>
	</div>


	<div class='mobile-row2' style='width:100%;height:15%;text-align:center;position:relative;margin-top:10px'>
		<button class='btn btn-info-2 btn-primary btn-sm' style='width: 60%;margin-top: 8%;font-weight: bolder;'>FAQ</button>
	</div>


	<div class='mobile-row2' style='width:100%;height:15%;text-align:center;position:relative;margin-top:10px'>
		<button class='btn btn-info-2 btn-primary btn-sm' style='width: 60%;margin-top: 8%;font-weight: bolder;'>Privacy Policy</button>
	</div>

	<div class='mobile-row2' style='width:100%;height:15%;text-align:center;position:relative;margin-top:10px'>
		<button class='btn btn-info-2 btn-primary btn-sm' style='width: 60%;margin-top: 8%;font-weight: bolder;'>Terms of Service</button>
	</div>
	</div>
</div>
END


?>
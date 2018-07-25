<?php
			
				include('config.php');
				$tsql="SELECT * FROM u_reg";
				$getResults= sqlsrv_query($conn, $tsql);
				
	
				
				
				$i=1;
				while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
					//$u_id = $row[0];
					$user_name = $row[0];
					$father_name=$row[1];
					$roll_no=$row[2];
					
					echo $user_name;
					echo $father_name;
					echo $roll_no;
				
			?>

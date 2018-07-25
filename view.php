<?php
			
<?php
include('config.php');
$sqlselect="SELECT * FROM u_reg";

$getResults= sqlsrv_query($conn, $sqlselect);

echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
{
 echo $row[0];
	 echo $row[1];
	 echo $row[2];
	 echo $row[3];
}

?>





				

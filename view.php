<?php
include('config.php');
$sqlselect="SELECT * FROM dbo.u_reg";

$getResults= sqlsrv_query($conn, $sqlselect);
echo $getResults;
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
{
 echo ($row['id'] . " " . $row['username'] . PHP_EOL);
}
?>







				

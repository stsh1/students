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
 echo ($row['id'] . " " . $row['username'] . PHP_EOL);
}

/*
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql="SELECT * FROM dbo.users";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['id'] . " " . $row['name'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);*/
?>





				

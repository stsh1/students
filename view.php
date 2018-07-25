<?php
			
<?php
$serverName = "studentserv.database.windows.net";
$connectionOptions = array(
    "Database" => "studentsdb",
    "Uid" => "ravdeep",
    "PWD" => "Like@1234"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$sqlselect="SELECT * FROM u_reg";

$getResults= sqlsrv_query($conn, $sqlselect);

echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
{
 echo $row[1];
}

?>





				

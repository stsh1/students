<?php
		$serverName = "finalprserver.database.windows.net";
$connectionOptions = array(
    "Database" => "finalprdbb",
    "Uid" => "ravdeep",
    "PWD" => "Like@1234"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
				
				
?>
				
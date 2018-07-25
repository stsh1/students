<?php
include('config.php');

$delete_record = $_GET['del'];

$query ="DELETE FROM dbo.u_reg WHERE rollno='$delete_record'";

if(sqlsrv_query($conn, $tsql)==true){

	echo "<script>window.open('view.php?delete=Record Has been Deleted Successfully!','_self')<script>";
}

?>

<?php
include('config.php');

$delete_record = $_GET['del'];

$query ="delete from u_reg where rollno='$delete_record'";

if (mysql_query($query)){

	echo "<script>window.open('view.php?delete=Record Has been Deleted Successfully!');</script>,'_self')";
}

?>

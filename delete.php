<?php
include('config.php');

$delete_record = $_GET['del'];

$query ="DELETE FROM dbo.u_reg WHERE rollno='$delete_record'";

$getResult=sqlsrv_query($conn, $query);


//if($getResult===true ){
if($conn->query($que)=== true){

	echo "<script>";
         echo " alert('Data deleted.');      
        window.location.href='view.php';
</script>";
	//echo "<script>window.open('view.php?delete=Record Has been Deleted Successfully!','_self')<script>";
}
//}

?>

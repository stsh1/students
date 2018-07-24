<html>
	<head><title>Viewing the Record</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div class="container">
	<?php include 'header.php'?>
		<center><font color='red' size='6'><?php echo @$_GET['delete'];?>
		<?php /*echo @$_GET['updated']; ?><?php echo @$_GET['logged']; */?>
			</font></center>
		<a href="logout.php">Logout</a>
		<br></br><table align="center" width='900' border='4'>
			<tr>
			
					<th colspan="20" align="center" bgcolor="yellow"><h1>Viewing all the record</h1></th>
				
			</tr>
			<tr align="center">
				<td>Serial No.</td>
				<td>Student's Name</td>
				<td>Father's Name</td>
				<td>Roll No.</td>
				<td>Delete</td>
				<td>Edit</td>
				<td>Detail</td>
			</tr>
	
			<?php
			
				include('config.php');
				$tsql="SELECT * FROM dbo.u_reg";
				$getResults= sqlsrv_query($conn, $tsql);
				
	
				
				
				$i=1;
				while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
					//$u_id = $row[0];
					$user_name = $row[0];
					$father_name=$row[1];
					$roll_no=$row[2];
					
				
			?>
				<tr align="center">
				<td><?php echo $i;$i++; ?></td>
				<td><?php echo $user_name; ?></td>
				<td><?php echo $father_name; ?></td>
				<td><?php echo $roll_no; ?></td>
					</tr>
			<?php } ?>
		</table>
		<?php include 'footer.php'?>
		<div>
	</body>
</html>

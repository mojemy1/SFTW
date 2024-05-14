<?php

include("serveremployer.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>EMPLOYER</title>
	</head>
	<body>
		<style>

		body{
		background-image:url("1.jpeg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed ;		
		}

		</style>

		<form action="serveremployer.php" method="post">

			<font face="Brush Script MT" size="72"> &nbsp&nbsp&nbsp <u>PHARMACY</u> </font> <hr>

			<center><font size="28"><b>Recording Employer Data</b><br>

			Name <input type="text" autofocus required name="employer_name" value="<?php echo $employer_name; ?>"> <br>

			Email <input type="email" name="employer_mail" value="<?php echo $employer_mail; ?>"> <br>

			Address <input type="text" name="employer_address" value="<?php echo $employer_address; ?>"> <br>

			Phone Number <input type="text" required name="employer_number" value="<?php echo $employer_number; ?>"> <br>

			Date of birth<input type="date" name="employer_birth" value="<?php echo $employer_birth; ?>"> <br>
			
			<button type="submit" name="Save"> Save </button> 
			<button type="reset" name="Clear"> Clear </button> 
			<button type="submit" name="Edit"> Edit </button> 
			<button type="submit" name="Delete"> Delete </button> </font> </center>

		</form>

		<a href="index.html"> HOME </a>
		<hr> 
		<center>
			<table border="1" cellpadding="10">
				<!--set col width-->
				<col width="150">
				<col width="150">
				<col width="150">
				<col width="150">
				<col width="150">
				<!--set col width-->
				<thead>
					<tr>
						<th>Employer Name</th>
						<th>Employer Email</th>
						<th>Employer Address</th>
						<th>Employer Phone Number</th>
						<th>Employer Date Of Pirth</th>
					</tr>
				</thead>
				<tbody>
						<!--Display Dynamic row of the tables from the Database-->
						<?php while ($row = mysqli_fetch_array($resultset)) { ?>
							<tr>
									<td><?php echo $row['EMPname']; ?></td>
									<td><?php echo $row['EMPmail']; ?></td>
									<td><?php echo $row['EMPaddress']; ?></td>
									<td><?php echo $row['EMPnumber']; ?></td>
									<td><?php echo $row['Date_of_birth']; ?></td>
							</tr>
						<?php } ?>
						<!--Display Dynamic row of the tables from the Database-->
					</tbody>	
			</table>
		</center>
	</body>
</html>
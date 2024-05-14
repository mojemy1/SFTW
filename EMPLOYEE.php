<?php

include("serveremployee.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>EMPLOYEE</title>
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

		<font face="Brush Script MT" size="72"> &nbsp&nbsp&nbsp <u>PHARMACY</u> </font> <hr>

		<center><font size="28"><b>Recording Employee Data</b><br>

		<form action="serveremployee.php" method="post">

			<input type="hidden" autofocus required name="employee_ID" value="<?php echo $employee_ID; ?>"> <!--echo for update--> 

			Name <input type="text" name="employee_name" value="<?php echo $employee_name; ?>"> <!--echo for update--> <br>
			
			Address <input type="text" name="employee_address" value="<?php echo $employee_address; ?>"> <!--echo for update--> <br>
			
			Phone Number <input type="text" name="employee_phone_number" value="<?php echo $employee_phone_number; ?>"> <!--echo for update--> <br>
			
			Date of birth <input type="date" name="employee_age" value="<?php echo $employee_age; ?>"> <!--echo for update--> <br>
			
			Hiring Date <input type="date" name="employee_hiring_date" value="<?php echo $employee_hiring_date; ?>"> <!--echo for update--> <br>
			
			Work Location <input type="text" name="employee_work_location" value="<?php echo $employee_work_location; ?>"> <!--echo for update--> <br>
			
			Salary <input type="number" name="employee_salary" value="<?php echo $employee_salary; ?>"> <!--echo for update--> <br>


		

			<button type="submit" name="Save"> Save </button>  
			<button type="reset" name="Clear"> Clear </button>
			<button type="submit" name="Edit"> Edit </button> 
			<button type="submit" name="Delete"> Delete </button>  <br> </font> </center>
 	
		</form>
			<a href="index.html"> HOME </a>
			<hr>

		<center> 
			<table border="1" cellpadding="10">
				<!--set col width-->
				<col width="50">
				<col width="150">
				<col width="150">
				<col width="150">
				<col width="150">
				<col width="150">
				<col width="150">
				<col width="150">
				<!--set col width-->
				<thead>
					<tr>
						<th>ID</th>
						<th>Employee Name</th>
						<th>Employee Address</th>
						<th>Employee Phone Number</th>
						<th>Employee Date Of Pirth</th>
						<th>Employee Hiring Date</th>
						<th>Employee Work Location</th>
						<th>Employee Salary</th>
					</tr>
				</thead>
				<tbody>
						<!--Display Dynamic row of the tables from the Database-->
						<?php while ($row = mysqli_fetch_array($resultset)) { ?>
							<tr>
									<td><?php echo $row['EMPID']; ?></td>
									<td><?php echo $row['EMPname']; ?></td>
									<td><?php echo $row['EMPaddress']; ?></td>
									<td><?php echo $row['EMPnumber']; ?></td>
									<td><?php echo $row['Date_of_birth']; ?></td>
									<td><?php echo $row['Hiring_date']; ?></td>
									<td><?php echo $row['Work_location']; ?></td>
									<td><?php echo $row['Salary']; ?></td>
							</tr>
						<?php } ?>
						<!--Display Dynamic row of the tables from the Database-->
					</tbody>	
			</table>
		</center> 
	</body>
</html>
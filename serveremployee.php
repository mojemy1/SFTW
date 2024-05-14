<?php

session_start();

$employee_ID=0 ;
$employee_name="" ;
$employee_address="" ;
$employee_phone_number=0 ;
$employee_age=0 ;
$employee_hiring_date=0 ;
$employee_work_location="" ;
$employee_salary=0 ;

$conn=mysqli_connect('localhost','root','','the pharmacy');
$alldata="SELECT * FROM employee";
$resultset=mysqli_query($conn,$alldata);

if (isset($_POST['Save']))

{
	$employee_ID=$_POST['employee_ID'];					
	$employee_name=$_POST['employee_name'];									
	$employee_address=$_POST['employee_address'];								
	$employee_phone_number=$_POST['employee_phone_number'];								
	$employee_age=$_POST['employee_age'];									
	$employee_hiring_date=$_POST['employee_hiring_date'];								
	$employee_work_location=$_POST['employee_work_location'];								
	$employee_salary=$_POST['employee_salary'];								

	$query="insert into employee (EMPID,EMPname,EMPaddress,EMPnumber,Date_of_birth,Hiring_date,Work_location,Salary)
	values ('$employee_ID','$employee_name','$employee_address','$employee_phone_number','$employee_age','$employee_hiring_date','$employee_work_location','$employee_salary')";
	mysqli_query($con,$query);

	$_SESSION['msg'] = "Employee Information Added Successfully";
	header("Location:EMPLOYEE.php");
}

if (isset($_POST['Edit']))

{
	$employee_ID=$_POST['employee_ID'];					
	$employee_name=$_POST['employee_name'];									
	$employee_address=$_POST['employee_address'];								
	$employee_phone_number=$_POST['employee_phone_number'];								
	$employee_age=$_POST['employee_age'];									
	$employee_hiring_date=$_POST['employee_hiring_date'];								
	$employee_work_location=$_POST['employee_work_location'];								
	$employee_salary=$_POST['employee_salary'];

	$query="update employee set EMPname='$employee_name',EMPaddress='$employee_address',EMPnumber='$employee_phone_number',Date_of_birth='$employee_age',Hiring_date='$employee_hiring_date',Work_location='$employee_work_location',Salary='$employee_salary' where EMPname='$employee_name'";
	mysqli_query($con,$query);

	$_SESSION['msg'] = "Employee Information Edited Successfully";
	header("Location:EMPLOYEE.php");

} 

if (isset($_POST['Delete']))

{

	$employee_name=$_POST['employee_name'];

	$query="delete from employee where EMPname='$employee_name'";
	mysqli_query($con,$query);

	$_SESSION['msg'] = "Employee Information Deleted Successfully";
	header("Location:EMPLOYEE.php");

} 

?>







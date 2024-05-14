<?php

session_start();
$employer_name="";
$employer_mail="";
$employer_address="";
$employer_number=0;
$employer_birth=0;

$con=mysqli_connect('localhost','root','','the_pharmacy');
$allData="select * from employer";
$resultset=mysqli_query($con,$allData);

if(isset($_POST['Save'])) 
{
    $employer_name=$_POST['employer_name'];
    $employer_mail=$_POST['employer_mail'];
    $employer_address=$_POST['employer_address'];
    $employer_number=$_POST['employer_number'];
    $employer_birth=$_POST['employer_birth'];

    $query="insert into employer (EMPname,EMPmail,EMPaddress,EMPnumber,Date_of_birth)
    values ('$employer_name','$employer_mail','$employer_address','$employer_number','$employer_birth')";
    mysqli_query($con,$query);

    $_SESSION['msg']="Employer data added successfuly";
    header("location:EMPLOYER.php");
}

if(isset($_POST['Edit'])) 
{
    $employer_name=$_POST['employer_name'];
    $employer_mail=$_POST['employer_mail'];
    $employer_address=$_POST['employer_address'];
    $employer_number=$_POST['employer_number'];
    $employer_birth=$_POST['employer_birth'];
    
    $query="update employer set EMPname='$employer_name',EMPmail='$employer_mail',EMPaddress='$employer_address',EMPnumber='$employer_number',Date_of_birth='$employer_birth' where EMPname='$employer_name' ";
    mysqli_query($con,$query);

    $_SESSION['msg']="Employer data edited successfully";
    header("location:EMPLOYER.php");
}

if(isset($_POST['Delete'])) 
{
    $employer_name=$_POST['employer_name'];

    $query="delete from employer where EMPname='$employer_name'";
    mysqli_query($con,$query);

    $_SESSION['msg']="Employer information deleted successfully";
    header("Location:EMPLOYER.php");
}

?>
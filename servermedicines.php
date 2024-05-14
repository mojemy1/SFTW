<?php

session_start();
$medicine_name="";
$medicine_number=0;
$expiring_date="";
$medicine_price=0;

$con=mysqli_connect('localhost','root','','the_pharmacy');
$alldata="select * from medicines";
$resultset=mysqli_query($con,$alldata);

if(isset($_POST['Save']))
{
    $medicine_name=$_POST['medicine_name'];
    $medicine_number=$_POST['medicine_number'];
    $expiring_date=$_POST['expiring_date'];
    $medicine_price=$_POST['medicine_price'];

    $query="insert into medicines (Name,Med_number,EXP_date,Price) 
    values ('$medicine_name','$medicine_number','$expiring_date','$medicine_price')";
    mysqli_query($con,$query);

    $_SESSION['msg']="Medicines data added successfully";
    header("location:MEDICINES.php");
}

if(isset($_POST['Edit']))
{
    $medicine_name=$_POST['medicine_name'];
    $medicine_number=$_POST['medicine_number'];
    $expiring_date=$_POST['expiring_date'];
    $medicine_price=$_POST['medicine_price'];

    $query="update medicines set Name='$medicine_name', Med_number='$medicine_number',EXP_date='$expiring_date',Price='$medicine_price' where Name='$medicine_name'";
    mysqli_query($con,$query);

    $_SESSION['msg']="Medicines data edited successfully";
    header("location:MEDICINES.php");

}

if(isset($_POST['Delete'])) 
{
    $medicine_name=$_POST['medicine_name'];

    $query="delete from medicines where Name='$medicine_name'";
    mysqli_query($con,$query);

    $_SESSION['msg']="Medcines data deleted successfully";
    header("location:MEDICINES.php");
}

?>
<?php

session_start();
$pharname="";
$pharnumber=0;
$pharlocation="";


#open connectio with the DB
$con = mysqli_connect('localhost','root','','the_pharmacy');

#select all product lines from the table
$alldata = "select * from pharmacy";
$resultset = mysqli_query($con,$alldata);


if(isset($_POST['Save'])) {

  $pharname = $_POST['pharname'];
  $pharnumber = $_POST['pharnumber'];
  $pharlocation = $_POST['pharlocation'];

  $query = "insert into pharmacy (PharName, PharNumber, PharLocation) values('$pharname',$pharnumber,'$pharlocation')";
  mysqli_query($con,$query);

  #Notification Message
  $_SESSION['msg'] = "pharmacy information added successfully";
  header("Location:PHARMACY.php");
}

#If the formed saved to "Update product line"
if (isset($_POST['Edit'])) {
  $pharname = $_POST['pharname'];
  $pharnumber= $_POST['pharnumber'];
  $pharlocation= $_POST['pharlocation'];

  $query="update pharmacy set PharName='$pharname', PharNumber= $pharnumber , pharlocation='$pharlocation' where PharName='$pharname'";
  mysqli_query($con,$query);
  $_SESSION['msg'] = "pharmacy information editad successfully";
  header("Location:PHARMACY.php");
  
}

if (isset($_POST['Delete'])) {

  $pharname = $_POST['pharname'];
  $query="delete from pharmacy where PharName='$pharname'";
  mysqli_query($con,$query);

  #Notification Message
  $_SESSION['msg'] = "pharmacy information deleted successfully";
  header("Location:PHARMACY.php");
}




 ?>

<?php

session_start();
$medcompany_name="";
$order_name="";
$delivery_location="";
$order_deadline="";
$order_price=0;
$payment=0;
$remaining=0;

$con=mysqli_connect('localhost','root','','the_pharmacy');
$alldata="select * from medicine_company";
$resultset=mysqli_query($con,$alldata);

if (isset($_POST['Save'])) 
{
    $medcompany_name=$_POST['medcompany_name'];
    $order_name=$_POST['order_name'];
    $delivery_location=$_POST['delivery_location'];
    $order_deadline=$_POST['order_deadline'];
    $order_price=$_POST['order_price'];
    $payment=$_POST['payment'];
    $remaining=$_POST['remaining'];

    $query="INSERT INTO `medicine_company` (`Name`, `Order`, `Delivery_location`, `Order_time_deadline`, `Order_price`, `Payment`, `Remaining`) 
    VALUES ('$medcompany_name','$order_name','$delivery_location','$order_deadline','$order_price','$payment','$remaining')";
    mysqli_query($con,$query);

    $_SESSION['msg']="Medicine company data added successfully";
    header("location:MEDICINE COMPANY.php");
}

if(isset($_POST['Edit']))
{
    $medcompany_name=$_POST['medcompany_name'];
    $order_name=$_POST['order_name'];
    $delivery_location=$_POST['delivery_location'];
    $order_deaDline=$_POST['order_deadline'];
    $order_price=$_POST['order_price'];
    $payment=$_POST['payment'];
    $remaining=$_POST['remaining'];
    
    $query="UPDATE `medicine_company` SET `Name`='$medcompany_name',`Order`='$order_name',`Delivery_location`='$delivery_location',
    `Order_time_deadline`='$order_deadline',`Order_price`='$order_price',`Payment`='$payment',`Remaining`='$remaining' 
    WHERE Name='$medcompany_name'";
    mysqli_query($con,$query);

    $_SESSION['msg']="Medicine company data edited sucessfully";
    header("location:MEDICINE COMPANY.php");
}

if(isset($_POST['Delete']))
{
    $medcompany_name=$_POST['medcompany_name'];
    $query="delete from medicine_company where Name='$medcompany_name'";
    mysqli_query($con,$query);

    $_SESSION['msg']="Medicine company data deleted successfully";
    header("location:MEDICINE COMPANY.php");
}

?>
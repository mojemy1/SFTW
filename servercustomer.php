<?php
session_start();
$customer_name="";
$customer_address="";
$customer_phonenumber=0;
$customer_age=0;
$customer_order="";
$price=0;

$con=mysqli_connect('localhost','root','','the_pharmacy');
$alldata="SELECT * from customers";
$resultset=mysqli_query($con,$alldata);

if(isset($_POST['Save'])) 

{
    $customer_name=$_POST['customer_name'];
    $customer_address=$_POST['customer_address'];
    $customer_phonenumber=$_POST['customer_phonenumber'];
    $customer_age=$_POST['customer_age'];
    $customer_order=$_POST['customer_order'];
    $price=$_POST['price'];

    $query="insert into customers (Name,Address,Number,Age,Orders,Price) 
    values ('$customer_name','$customer_address','$customer_phonenumber','$customer_age','$customer_order','$price')";
    mysqli_query($con,$query);

    $_SESSION['msg'] = "Customer information added successfully";
    header("location:CUSTOMER.php");


}

if(isset($_POST['Edit'])) 

{
    $customer_name=$_POST['customer_name'];
    $customer_address=$_POST['customer_address'];
    $customer_phonenumber=$_POST['customer_phonenumber'];
    $customer_age=$_POST['customer_age'];
    $customer_order=$_POST['customer_order'];
    $price=$_POST['price'];
    $query="update customers set Name='$customer_name', Address='$customer_address',Number='$customer_phonenumber', Age='$customer_age', Orders='$customer_order',Price=$price where Name='$customer_name' ";
    mysqli_query($con,$query);

    $_SESSION['msg'] = "Customer information edited successfully";
    header("location:CUSTOMER.PHP");
}

if (isset($_POST['Delete']))
{
    $customer_name=$_POST['customer_name'];
    $query="DELETE FROM customers where Name='$customer_name' ";
    mysqli_query($con,$query);
     $_SESSION['msg'] = "Customer information deleted successfully";
     header("location:CUSTOMER.PHP");
}

?>
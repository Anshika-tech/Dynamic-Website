<?php


 $con1=mysqli_connect('localhost','root');
 if($con1){
    echo "Connection successful";
 }
 else{
    echo " No Connection";
 }

 mysqli_select_db($con1,'order');
 $order_id=$_POST['order_id'];
 $Mobile=$_POST['Mobile'];
 $Quantity=$_POST['Quantity'];
 $size=$_POST['size'];
 $Payment=$_POST['Payment'];
 $Address=$_POST['Address'];
 $Message=$_POST['Message'];

$query1=" insert into orderinfo (order_id,Mobile,Quantity,size,Payment,Address,Message) values ('$order_id','$Mobile','$Quantity','$size','$Payment','$Address','$Message')";
mysqli_query($con1,$query1 );
header('location:index.php');
?>

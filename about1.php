 <?php


 $con2=mysqli_connect('localhost','root');
 if($con2){
    echo "Connection successful";
 }
 else{
    echo " No Connection";
 }

 mysqli_select_db($con2,'ordernow');
 $Mobile=$_POST['Mobile'];
 $Pincode=$_POST['Pincode'];
 $Address=$_POST['Address'];
 $Message=$_POST['Message'];

 $query2=" insert into infor (Mobile,Pincode,Address,Message) values ('$Mobile','$Pincode','$Address','$Message')";

 mysqli_query($con2,$query2 );
 
 header('location:order1.php');


?> 

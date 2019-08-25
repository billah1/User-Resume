
<?php
session_start();
$con =mysqli_connect('localhost','root',"");
mysqli_select_db($con,'ass');
$fullname=$_POST['email'];
$password=$_POST['password'];

$query="select * from registration where username='$fullname' && password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1){
 
  header('location:personalinfo.php');

}
else{
 header('location:reg1.php');
	
}




?>
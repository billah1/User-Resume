<!DOCTYPE html>

<html>
<head>
     
    <title>CV Maker</title>
    <link rel="stylesheet" type="text/css" href="perinfocss.css" />
</head>

    <body>

    <div id="container">
        
        
        <div id="left">
            <div id="cvlog">
  <h1 style="font-style:normal">Build Your CV </h1>
            <br>
                
            </div>
            <form name="block" action="mb.html" method="post">
                
             
            <table>  
                <h4><u>Personal Information</u></h4>
                <tr>
                    <td>
                        Username:
                    </td>
                <td>
                 <input type="text" name="name">
                         
                    </td>
                    </tr>
                 
                  <tr>
                    <td>
                        Email:
                    </td>
                <td>
                  <input type="text" name="email">
                         
                    </td>
                    </tr>
        
                <tr>
                    <td>
                        Phone:
                    </td>
                <td>
                  <input type="numeric" name="phone">
                         
                    </td>
                    </tr>
        
             
            
               <tr>
                    <td>
                         Address:
                    </td>
                <td>
                  <input type="text" name="address">
                         
                    </td>
                    </tr>
        
        
               <tr>
                    <td>
                         Date of Birth:
                    </td>
                <td>
                   
             <input type="date" name="birth">
                         
                    </td>
                    </tr>
        
        
                  <tr>
                    <td>
                         Profession:
                    </td>
                <td>
                   
              <input type="text" name="profession">
                         
                    </td>
                    </tr>
                </table>
          
             
                <br><br>
            <input type="submit"  class="button1" name="save" value="next" required>
            </form>
             </div>
            
            
                
                
    </div>
    </body>
</html>


<?php
session_start();

   
$host="localhost";
$user="root";
$password="";
$dbname="project";

 $conn=mysqli_connect($host,$user,$password,$dbname);


if(isset($_POST['save']))

{
    
    
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone']; 
$address=$_POST['address']; 
$birth=$_POST['birth'];
$profession=$_POST['profession']; 
 
    
$query=" INSERT INTO `perinfo`(`name`, `email`, `phone`, `address`, `birth`,`profession` ) VALUES ('$name','$email','$phone','$address','$birth','$profession')" or die ("Failed to query database".mysqli_error());
    
    
      
  $check=mysqli_query($conn,$query);
    if($check){
        header("Location:education.php");
        $lastid = mysqli_insert_id($conn);
        $_SESSION["perinfoid"]=$lastid;
         
    }
    else{
          echo("Soory,Error Occured");
    }
    
}

 

 

 

?>
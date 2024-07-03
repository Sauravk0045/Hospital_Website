<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hospital";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$age=$_POST['age'];
$phone=$_POST['number'];
$email=$_POST['email'];
$adress=$_POST['address'];
 $sql="INSERT INTO emergency(first,last,age,phone,email,adress) VALUES('$firstname','$lastname','$age','$phone','$email','$adress')";
 if(mysqli_query($con,$sql))
 {
    echo '<script type="text/javascript">'; 
echo 'alert("Your response is recorded!! Our ambulance is on the way.....");';
echo 'window.location.href = "emergency.html";';
echo '</script>';
 }
 else
 {
    echo "somthing went wrong";
 }

  ?> 
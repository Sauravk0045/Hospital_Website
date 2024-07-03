<?php
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "hospital";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 }  
$name=$_POST['name'];
$number=$_POST['number'];
$department=$_POST['department'];
$age=$_POST['age'];
$email=$_POST['email'];
$date=$_POST['date'];
$address=$_POST['address'];
$doctor=$_POST['doctors'];
$gender=$_POST['gender'];
$time=$_POST['time'];


$sql="INSERT INTO appointment(name,age,doctorname,doctordepartment,email,phone,appointment_date,address,gender,consultant_hour)VALUES('$name','$age','$doctor','$department','$email','$number','$date','$address','$gender','$time')";

if(mysqli_query($con,$sql))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("your appoinment is successfully scheduled ");';
    echo 'window.location.href = "appointment.html";';
    echo '</script>';
}
else
{
echo 'something went wrong';
}


?>
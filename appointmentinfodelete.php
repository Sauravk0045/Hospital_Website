<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hospital";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
$userid=$_GET['use'];
$query="DELETE FROM appointment WHERE id='$userid'";
$data=mysqli_query($con,$query);
if($data)
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Record is deleted succesfully");';
    echo 'window.location.href="appointmentinfo.php"';
    echo '</script>';
}
else
{
echo "Something is wrong";
}
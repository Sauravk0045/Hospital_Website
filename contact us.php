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
$email=$_POST['email'];
$phone=$_POST['phone'];
$query=$_POST['query'];

$sql="INSERT INTO contact(name,email,phone,query)VALUES('$name','$email','$phone','$query')";
if(mysqli_query($con,$sql))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Your query is recorded!!   We can try to answer your query as soon as possible");';
    echo 'window.location.href="contact us.html"';
    echo '</script>';
}
else
 {
    echo "somthing went wrong";
 }

 ?>
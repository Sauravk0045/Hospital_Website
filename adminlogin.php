<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hospital";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $username = $_POST['username'];  
    $pass = $_POST['password'];  
        
        $username = stripcslashes($username);  
        $pass = stripcslashes($pass);  
        $username = mysqli_real_escape_string($con, $username);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select *from adminlogin where username = '$username' and password = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count ==TRUE){  
            echo "<h1><center> Login successful </center></h1>"; 
            header("Location:doctorinfo.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
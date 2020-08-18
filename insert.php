<?php
     include 'includes/config.php';
?>
<?php
    
    $name =  $_POST["name"];  
    $email = $_POST["email"];  
    $contact = $_POST["contact"];  
    $address = $_POST["address"];  
    $gender = $_POST["gender"];  
    $message = $_POST["message"];  
        
    $query = mysqli_query($config,"INSERT INTO form (`name`, `email`, `contact`, `address`, `gender`, `message`) VALUES('".$name."','".$email."','".$contact."','".$address."','".$gender."','".$message."')");
        
    if($query){
        echo 1;
        }	else{
        echo 0;
        }      
?>
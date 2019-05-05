<?php
    include('dbconnection.php');
    
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $companyName = $_POST['companyName'];
    $password = $_POST['password'];
   
    
    $sql = "UPDATE `Account` SET 
           `userName`='".$userName."',`email`='".$email."',`firstName`= '".$firstName."',
           `middleName`='".$middleName."',`lastName`='".$lastName."',
           `companyName`='".$companyName."',`passowrd`= $password
           WHERE `idProduct`= $idProduct";
    $result= mysqli_query($conn, $sql);
    
    if($result) {
        echo 'Product Updated';
    } else {
        echo 'Update Failed';
    }
    mysqli_close($conn);
?>

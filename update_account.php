<?php
$conn = mysqli_connect("avl.cs.unca.edu", "ewarren1", "sql4you", "ewarren1DBCSCI338");


    $userName = $_SESSION['username'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $companyName = $_POST['companyName'];
    $password = $_POST['password'];
   
    
    $sql = "UPDATE `Account` SET 
           `userName`='".$userName."',`email`='".$email."',`First`= '".$firstName."',
           `Middle`='".$middleName."',`Last`='".$lastName."',
           `companyName`='".$companyName."',`password`= $password  WHERE `userName`= {$_SESSION['username']}";
                 
 
$result= mysqli_query($conn, $sql);
    
 
if($result) {
    echo 'Account Updated';
} else {
    echo 'Account Failed';
}
mysqli_close($conn);
?>

<?php
$conn = mysqli_connect("avl.cs.unca.edu", "ewarren1", "sql4you", "ewarren1DBCSCI338") or die("Connection failed: ");

$idProduct = $_POST['idProduct'];
$title = $_POST['title'];
$first = $_POST['first'];
$middle = $_POST['middle'];
$last = $_POST['last'];
$amountShipped = $_POST['amountShipped'];
$date = $_POST['date'];
$accountID = $_POST['accountID'];
$price = $_POST['priceTotal'];


$sql = "INSERT INTO Orders(Product_idProduct, Title, First, Middle, Last, amountShipped, dateOfOrder, Account_idAccount, price_Total)
             VALUES('$idProduct', '$title', '$first', '$middle', '$last', '$amountShipped', '$date', '$accountID', '$price')";

if(!mysqli_query($conn, $sql)) {
    echo "An error occured when ordering the product";
} else {
    echo "Product inserted successfully.";
}

mysqli_close($conn);
?>

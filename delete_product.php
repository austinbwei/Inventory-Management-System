<?php
    $conn = mysqli_connect("avl.cs.unca.edu", "ewarren1", "sql4you", "ewarren1DBCSCI338");
    
    $idProduct = $_POST['idProduct'];
    
    $sql = "DELETE FROM Product WHERE `idProduct`= $idProduct";
    
    if($conn->query($sql)) {
        echo "Product deleted";
    } else {
        echo "Error occured while deleting.";
    }
    
    mysqli_close($conn);
?>
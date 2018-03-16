<?php
include "connect.php";
if(isset($_POST['sub'])) {
    $a=$_POST['email'];
    $sql = "SELECT * FROM login where email = $a ";
    $result = mysqli_query($conn, $sql);
    echo "successful";
}
?>

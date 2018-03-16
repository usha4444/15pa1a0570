<?php
include "connect.php";
if(isset($_POST['sub'])) {
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['pass'];
    $sql = "INSERT INTO login (name,email,password)
    VALUES ('$a','$b','$c')";
    $qry=mysqli_query($conn,$sql) or die("Connection failed: " . mysqli_error($db));
    header('location:login.html');
}
?>

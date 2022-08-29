<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM for_project WHERE id='$id' ";
$data = mysqli_query($conn, $sql);
if($data){
    echo "record deleted";
    header('location:logindisplay.php');
}
else{
    echo "record not delete ";
}
?>
<?php
include("connection.php");


if(!empty($_POST['id'])) {
       $id = $_POST['id'];
       $sql = "DELETE FROM  crud WHERE id = '$id' ";
       mysqli_query($conn,$sql);
}
?>
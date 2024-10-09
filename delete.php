<?php include('db_connection.php'); ?>
<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query="DELETE FROM `protofolio` WHERE `id` = '$id' ";

$result=mysqli_query($connection,$query);

if(!$result){
    die("Error".mysqli_error($connection));
}
else{
    header("location:index.php?delete_msg=Data deleted successfully");
}
?>
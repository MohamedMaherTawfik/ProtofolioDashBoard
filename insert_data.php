<?php
include('db_connection.php');
if(isset($_POST['add_data'])){
   $title = $_POST['title'];
   $subtitlr = $_POST['subtitlr'];
   $description = $_POST['description'];
   $about_title = $_POST['about_title'];    
   $about_description = $_POST['about_description'];
   $about_goals_title = $_POST['about_goals_title'];
   $about_goals_description = $_POST['about_goals_description'];
   $service_title = $_POST['service_title'];
   $service_description = $_POST['service_description'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];

   if($title == "" || empty($title)){
    header('location: index.php?error=Title is required');
   }
   else{
    $query="insert into `protofolio` (`title`,`subtitlr`,`description`,`about_title`,`about_description`,`about_goals_title`,`about_goals_description`,`service_title`,`service_description`,`address`,`phone`,`email`) 
    values ('$title','$subtitlr','$description','$about_title','$about_description','$about_goals_title','$about_goals_description','$service_title','$service_description','$address','$phone','$email')";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die(mysqli_error($connection));
    }
    else{
        header('location: index.php?insert_msg=Data added successfully');
    }
}
}



?>
<?php include('header.php'); ?>
<?php include('db_connection.php'); ?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM `protofolio` WHERE `id`='$id'";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php
if(isset($_POST['update_data'])){

    if(isset($_GET['id_new'])){
        $idnew=$_GET['id_new ']; 
    }

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

    $query="update `protofolio` set `title` = '$title', `subtitlr` ='$subtitlr',`description`='$description',`about_title`='$about_title',`about_description`='$about_description',
    `about_goals_title`='$about_goals_title', `about_goals_description` = '$about_goals_description',
    `service_title`='$service_title',`service_description`='$service_description',`address`='$address',`phone` = '$phone',`email` = '$email' where `id` = '$idnew' ";


    $result = mysqli_query($connection,$query);
    
    if(!$result){ 
        die("Error".mysqli_error($connection));
    }
    else{
        header('location: index.php?update_msg=Data updated successfully');
    }
}
?>


        <form action="update.php?id_new=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
            <br>
            <label for="subtitle">subtitle</label>
            <input type="text" class="form-control" name="subtitlr" value="<?php echo $row['subtitlr']; ?>">
            <br>
            <label for="description">description</label>
            <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>">
            <br>
            <label for="about_title">about_title</label>
            <input type="text" class="form-control" name="about_title" value="<?php echo $row['about_title']; ?>">
            <br>
            <label for="about_description">about_description</label>
            <input type="text" class="form-control" name="about_description" value="<?php echo $row['about_description']; ?>">
            <br>
            <label for="about_goals_title">about_goals_title</label>
            <input type="text" class="form-control" name="about_goals_title" value="<?php echo $row['about_goals_title']; ?>">
            <br>
            <label for="about_goals_description">about_goals_description</label>
            <input type="text" class="form-control" name="about_goals_description" value="<?php echo $row['about_goals_description']; ?>">
            <br>
            <label for="service_title">service_title</label>
            <input type="text" class="form-control" name="service_title" value="<?php echo $row['service_title']; ?>">
            <br>
            <label for="service_description">service_description</label>
            <input type="text" class="form-control" name="service_description" value="<?php echo $row['service_description']; ?>">
            <br>
            <label for="address">address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
            <br>
            <label for="phone">phone</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
            <br>
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            <br>
            <button type="submit" class="btn btn-success" name="update_data">Update</button>
            </div>
        </form>

<?php include('fotter.php') ?> 
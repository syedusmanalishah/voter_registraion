<?php
include_once 'common/connection.php';

?>





<?php

include_once 'common/connection.php';






if (isset($_POST['submit'])) 

{

	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$cnic = $_POST['cnic'];
    $image = $_FILES['image'];
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];


     if($name == '' || $adress == '' || $cnic == '') {
        echo "<script>alert('Any Field Is Empty')</script>";
        exit();
    }

        if($image_type =="image/jpeg" || $image_type =="image/png" || $image_type =="image/jpg")
        {
            move_uploaded_file($image_tmp,"img/$image_name");
        }
        else{
            echo "<script>alert('nvalid mage type')</script>";
            exit();
        }

    $query = "insert into voters (name, address, id_card,image) values ('$name', '$adress', '$cnic', '$image_name')";

    $result = mysqli_query($con, $query);
    
     if ($result) {
        echo "<center><h1>Data Has Been Inserted Successfully</h1></center>";
        header("refresh:0.5; url=reg.php");
    } else {
        echo "<center><h1>Data Submission Failed</h1></center>".mysqli_error($con);
    }
}   
?>




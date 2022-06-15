<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet "  href="style.css">
</head>
<body>
<?php
include_once 'common/nav.php';
include_once 'common/connection.php';
$id = $_GET['id'];

$name = $_POST['name'];
$adress = $_POST['adress'];
$cnic = $_POST['cnic'];
$image = $_FILES['image'];
$image_name = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_type = $_FILES['image']['type'];

$sQuery = ("select * from voters WHERE id = $id");


$sRes = mysqli_query($con, $sQuery);

$row =mysqli_fetch_array($sRes);
$image_name = $_FILES['image']['name'];
$image=$row['image'];
?>


<form  method="post" action=""  enctype="multipart/form-data">
    <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to Register your vote.</p>
    <hr>
    <label for="name"><b>NAME</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" value="<?php echo $row['name'];?>" >
    <label for="Adress"><b>Adress</b></label>
    <input type="text" placeholder="Enter Adress" name="adress" id="adress" value="<?php echo $row['address'];?>" >
    <label for="id-card"><b>id-card no</b></label>
    <input type="text" placeholder="Enter cnic number" name="cnic" id="cnic" value="<?php echo $row['id_card'];?>" >
    <label><b>Select Image File:</label></b></label>
    <input type="file" name="image"   >
    <img align="center" width="100px" src="img/<?php echo $image;?>  ">
    <button type="submit" name="ssubmit" class="registerbtn">update</button>
    </div>
</form>
</body>
</html>





<!-- this the code for update -->


<?php
include_once 'common/connection.php';
?>

<?php
if (isset($_POST['ssubmit'])) 

{


    if($image_type =="image/jpeg" || $image_type =="image/png" || $image_type =="image/jpg")
    {
        move_uploaded_file($image_tmp,"img/$image_name");
    }
    else{
        echo "<script>alert('nvalid mage type')</script>";
        exit();
    }

    
            $query="UPDATE `voters` SET `name`='$name',`address`='$adress',`id_card`='$cnic',`image`='$image_name' WHERE id =$id";
             $result = mysqli_query($con, $query);
    
     if ($result) {
        echo "<center><h1>Data Has Been Iudpades</h1></center>";
        header("refresh:0.5; url=reg.php");
    } else {
        echo "<center><h1>Data Submission Failed</h1></center>".mysqli_error($con);
    }
}   
?>





<html>
	<head>
		<title>Searching</title>

        <link rel="stylesheet "  href="style.css">
	</head>
	<body>
        <div class="se">
    <form  method="post" action="se.php"  enctype="multipart/form-data">
		<!-- data searching code -->
        <input type="text" name="get_id"  placeholder="enter id">
    <button type="submit" name="search_by_id" class="registerbtn">Search</button>
</form>
</div>




<center>
<table cellpadding="5" cellspacing="4" border="2" width="90%">
<tr>

  <td bgcolor="pink">sno</td>
    <td bgcolor="pink">NAME</td>
    <td bgcolor="pink">Address</td>
    <td bgcolor="pink">id card no</td>
    <td bgcolor="pink">IMAGE</td>
   
    <td>update</td>
    <td>delete</td>
</tr>


<?php
include_once("common/connection.php");
if(isset($_POST['search_by_id'])){
    $search = $_POST['get_id'];

    $query ="SELECT * FROM `voters` WHERE id='$search'";
    $data = mysqli_query($con, $query);

    if(mysqli_num_rows($data) > 0)
    {

    $row = mysqli_fetch_assoc($data);
    $id = $row['Id'];
    $name = $row['name'];
    $address = $row['address'];
    $id_card = $row['id_card'];
    $image = $row['image'];
    }else {
        echo "Undifined ID";
            $id = "";
            $name = "";
            $address = "";
    }
?>

</tr>
    <tr bgcolor="yellow">
        <b>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['id_card']; ?></td>
        <td align="center"><img style="border-radius:100px;"style="border-radius=30px" style="border-radius=30px" align="center" width="100" src="img/<?php echo $image;?>" alt="Image Not found"></td>        

        <td> <a  style="background-color: skyblue;" href="update.php?id=<?php echo $row['id']; ?>" > update</a> </td> 
              <td> <a  style="background-color: skyblue;" href="delete.php?id=<?php echo $row['id']; ?>" > delete</a> </td> 
            

    </b>
    </tr>
    <?php
    }
    ?>
    
</table>
</center>



	</body>
</html>
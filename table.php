<html>
    <head><link rel="stylesheet "  href="style.css"></head>

 

<?php
include_once 'common/nav.php';
?>
<div class="tcontainer">
<center>

<table border="2px" cellpaddng="2px",cellspacing="2px", width="auto">

  <?php
  
include_once 'common/connection.php';


$sQuery = ("SELECT * FROM voters");

$sRes = mysqli_query($con, $sQuery);

?> 
<tr>

  <td>sno</td>
    <td>NAME</td>
    <td>Address</td>
    <td>id card no</td>
    <td>IMAGE</td>
   
    <td>update</td>
    <td>delete</td>
</tr>

 
<?php
$counter =1;
while ($row =mysqli_fetch_array($sRes)){ 

  $image=$row['image'];
  $pdf=$row['pdf']
?>  	  
</tr> 


<tr >
              <td><?php echo   $counter; ?></td>
              <td><?php echo $row ['name'] ;?></td>
              <td><?php echo $row  ['address'];?></td>
              <td><?php  echo $row ['id_card'];?></td>
           
              <td align="center"><img align="center" width="100px" src="img/<?php echo $image;?>  "></td>

            
              
              <td> <a  style="background-color: skyblue;" href="update.php?id=<?php echo $row['id']; ?>" > update</a> </td> 
              <td> <a  style="background-color: skyblue;" href="delete.php?id=<?php echo $row['id']; ?>" > delete</a> </td> 
            
              </tr>  
              <?php
              $counter++;
              }
              ?> 


</table>


</center>
</div>
</html>
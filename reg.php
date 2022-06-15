<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet "  href="style.css">
</head>
<body>


<?php
include_once 'common/nav.php';
?>





<form  method="post" action="action.php"  enctype="multipart/form-data">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to Register your vote.</p>
    <hr>




    <label for="name"><b>NAME</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" >

    <label for="Adress"><b>Adress</b></label>
    <input type="text" placeholder="Enter Adress" name="adress" id="adress" >

    <label for="id-card"><b>id-card no</b></label>
    <input type="text" placeholder="Enter cnic number" name="cnic" id="cnic" >


    <label><b>Select Image File:</label></b></label>
    <input type="file" name="image">
    
   

    <button type="submit" name="submit" class="registerbtn">Submits</button>

    <input type="text" name="get_id"  placeholder="enter id">
    <button type="submit" name="search_by_id" class="registerbtn">Search</button>

  </div>
</form>











</body>
</html>
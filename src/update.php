<!DOCTYPE html>
 <HTML lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styleAdd.css">
    <title>Registation Form Using HTML5 and CSS3</title>
</head>
<body>  
     <center>
     <h1> UPDATE DATA</h1></center>
   
     <div class="signup-form">
          <img  src ="../images/new10.jpg">
          <form action="update.php" method="post">
          <input type="text" name="nameABrand"  class="txt"placeholder="Enter MedName & Brand"/>
          <input type="int" name="Price"  class="txt"placeholder="Enter Med Price"/>
          <input type="text" name="Description"  class="txt"placeholder="Enter Med Description"/>
               <input type="submit" value="Update Data" class="btn" name="btn-update2">
          </form>

 <?php
require_once('connection.php');

if(isset($_POST['btn-update2'])){
  $mdname= mysqli_real_escape_string($con,$_POST['nameABrand']);
  $medname= mysqli_real_escape_string($con,$_POST['nameABrand']);
  $mprice = mysqli_real_escape_string($con,$_POST['Price']);
  $mdescription = mysqli_real_escape_string($con,$_POST['Description']);

  $sql = "UPDATE medapp SET nameBrand='$medname', medPrice='$mprice', medDescription='$mdescription' WHERE nameBrand='$mdname'";


  if ($con->query($sql) === TRUE){
    echo '<script>
    alert("updated successfully");
    window.location.href="http://localhost/new%20app/src/storepage.php";
    </script>';

  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }

}
?>

</div> 
</body>
</html>            
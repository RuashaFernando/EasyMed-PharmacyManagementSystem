<?PHP
require_once('connection.php');

if(isset($_POST['btn-delete'])){
  
  $medname= mysqli_real_escape_string($con,$_POST['medName']);

  $sql = "DELETE FROM medapp WHERE nameBrand='$medname'";

  if ($con->query($sql) === TRUE){
    echo '<script>
    alert("deleted successfully");
    window.location.href="http://localhost/new%20app/src/storepage.php";
    </script>';

  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }

}
?>  

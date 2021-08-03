<?PHP

require_once('connection.php');

if(isset($_GET['Delete'])){
    $medname=$_GET['Delete'];
  $mysqli->query("DELETE FROM medapp WHERE nameBrand='$medname'") or die ($mysqli->error());


}
?>
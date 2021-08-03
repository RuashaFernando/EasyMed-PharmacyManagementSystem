<?php
    
  require_once('connection.php');

  if(isset($_POST['btn-save2'])){    
     
    $lName= mysqli_real_escape_string($con,$_POST['loginName']);
    $lPassword = mysqli_real_escape_string($con,$_POST['loginPassword']);

    if(empty($lName) || empty($lPassword)){
      echo 'Please Fill In The Blanks';
    }

  }

// echo '<script>alert("'.$lName.'")</script>';
// echo '<script>alert("'.$lPassword.'")</script>';

$sql = "SELECT userName,pwd FROM users WHERE  userName = '$lName' AND pwd = '$lPassword'";

$result = $con->query($sql);
 
if ($result !== false && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "loginName: " . $row["userName"]. "  loginPassword: " . $row["pwd"]."<br>";
    echo '<script>
    alert("logged in successfully");
    window.location.href="http://localhost/new%20app/src/storepage.php";
    </script>';

   
  
   }
} else {
  echo '<script>
  alert("Incorrect username or password");
  window.location.href="http://localhost/new%20app/src/login.php";
  </script>';

}
$con->close();
 ?> 
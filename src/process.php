<?php
    
  require_once('connection.php');

  if(isset($_POST['btn-save'])){    
     
    $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
    $Email = mysqli_real_escape_string($con,$_POST['Email']);
    $Password = mysqli_real_escape_string($con,$_POST['Password']);

    if(empty($UserName) || empty($Email) || empty($Password)){
      echo 'Please Fill In The Blanks';
    } 
    
    else{
      $sql = "INSERT INTO users (userName,email,pwd) VALUES ('$UserName', '$Email', '$Password')";

      if ($con->query($sql) === TRUE){
        echo '<script>
        alert("Account created successfully");
        window.location.href="http://localhost/new%20app/src/login.php";
        </script>';
    
      }
      else{
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
    
  }



?>
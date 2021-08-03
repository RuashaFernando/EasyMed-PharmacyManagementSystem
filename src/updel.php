<html>
<head>
     <title> Search Data By NAME</title>


</head>
<body>
    <center>
<div class="container">
    <form action="" method="post">
         <input type="text" name="nameAndBrand"  class="txt"placeholder="Enter MedName & Brand"/>
         <input type="submit" name="search"  class ="btn" value="SEARCHED BY NAME AND BRAND"/>
    </form>

<?php
                 

                 $con=mysqli_connect('127.0.0.1:3308','root','','testapp'); 
                 if($con->connect_error){
                   die("Connection failed:".$con->connect_error);
                 }
                 if(isset($_POST['search'])){
                   
                 
                     $medname=($_POST['nameAndBrand']);
 
                     $sql="SELECT* from medapp where nameBrand='$medname'";
                     $result=$con->query($sql);
 
                     if($result !== false && $result->num_rows > 0){ 
                         echo
                         "<table>                    
                              <tr>
                                  <th>Med Name & Brand</th>
                                  <th>MedPirce</th>
                                  <th>MedDescription</th>
                                  <th>Action</th> 
                              
                              </tr>";            
 
                      while(   $row =  $result->fetch_assoc()   ){
                         echo 
                         "<tr>
                             <td>".$row["nameBrand"]."</td>
                             <td>".$row["medPrice"]."</td>
                             <td>".$row["medDescription"]."</td>
                             <td>
                             <a href='update.php'>Update</a>        
                             <a href='delete.php?'>Delete
                             </a></td>.";           

            
                         
                      }
                         echo "</table>";
 
                 }
                       else{
                           echo "0 result";
                         }
                            $con->close();
                     
                     }
                 ?>
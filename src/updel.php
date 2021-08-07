<html>
<head>
     <title> Search Data By NAME</title>
     <style> 
     body{
            margin: 0px;
            padding: 0px;
            background:url(../images/new7.jpg)no-repeat ;
            background-size: cover;
     }
     table,th,td{
              border:2px solid black;
              width:1100px;
              height:40px;
              background-color: #045F5F;
              color: aliceblue;
        }
     .txt{
            margin-bottom: 20px;
            margin-top: 30px;
             display: block;
              width: 25%;
             padding-left: 10px;
            height: 40px;
            box-sizing: border-box;
             outline: 1px black;
             border: none;
             font-size: 14px;
             color: #34A56F;
        }
     .btn0{
            width: 12%;
            height: 5%;
            font-size: 10px;
            padding: 10px 24px;
            background: rgb(207, 9, 9);
            color: white;
            border-radius: 2px;
           cursor: pointer;
            transition:0.08s ;

         } 

        .btnA{
       
            width: 15%;
            height: 20%;
            font-size: 10px;
            padding: 10px 24px;
            background: green;
            color: white;
            border-radius: 2px;
           cursor: pointer;
            transition:0.08s ;  
   

      }
      .btnB{
        width: 12%;
            height: 10%;
            font-size: 8px;
            padding: 0;
            background:#34A56F;
            color: red;
            border-radius: 70px;
            cursor: pointer;
            transition:0.08s ;  
      }

         </style>     


</head>
<body>
    <center>
<div class="container">
    <form action="" method="post">
         <input type="text" name="nameAndBrand"  class="txt"placeholder="Enter MedName & Brand"/>
         <input type="submit" name="search"  class ="btn0" value="SEARCHED BY NAME AND BRAND"/>
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
                         "
                         <tr>
                             <td>".$row["nameBrand"]."</td>
                             <td>".$row["medPrice"]."</td>
                             <td>".$row["medDescription"]."</td>
                             <td>
                             <form action='delete.php' method='post'>
                             
                             <input type='hidden' name='medName' value=".$row["nameBrand"].">
                             <input type='submit' value='delete' class='btnA' name='btn-delete'>
                                
                            </form>

                            <form action='update.php' method='post'>
                            <input type='hidden' name='medName' value=".$row["nameBrand"].">
                            <input type='submit' value='update' class='btnB' name='btn-update'>
                            </form>
                             </td>.";           

            
                         
                      }
                         echo "</table>";
 
                 }
                       else{
                           echo "0 result";
                         }
                            $con->close();
                     
                     }
                 ?>
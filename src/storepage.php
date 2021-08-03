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
        h1{
            color:#F70000 ;
            font-size: 50px;
            text-shadow: 0 0 5px #810000, 0 0 5px #810000;
           
            
        }

        .btn2 {
         box-shadow:  0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
         background-color: #4CAF50;
         padding: 10px 24px;
         border-radius: 8px;
         width: 250px;
         font-size: 20px;
         color: white;
         
         
        }
        .btn2:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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

        table,th,td{
              border:2px solid black;
              width:1100px;
              height:40px;
              background-color: #045F5F;
              color: aliceblue;
        }
        .btn{
            width: 12%;
            height: 5%;
            font-size: 10px;
            padding: 0;
            background: rgb(207, 9, 9);
            color: white;
            border-radius: 70px;
           cursor: pointer;
            transition:0.08s ;

         }      
         </style>

</head>
<body>
    <center>
   <h1> WELCOME TO THE STORE PAGE</h1>
   <form action="edit.php" method="post">
                <input type="submit" value="Click Here To Edit " class="btn2" name="btn-save4">
                </form>   

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
                             
                             </tr>";            

                     while(   $row =  $result->fetch_assoc()   ){
                        echo 
                        "<tr>
                            <td>".$row["nameBrand"]."</td>
                            <td>".$row["medPrice"]."</td>
                            <td>".$row["medDescription"]."</td>
                        </tr>";
                     }
                        echo "</table>";

                }
                      else{
                          echo "0 result";
                        }
                           $con->close();
                    
                    }
                ?>
            




            

    <table>
                <tr>
                   <th>Med Name & Brand</th>
                   <th>MedPirce</th>
                   <th>MedDescription</th> 
                
                </tr>
                <?php
                 

                $con=mysqli_connect('127.0.0.1:3308','root','','testapp'); 
                if($con->connect_error){
                  die("Connection failed:".$con->connect_error);
                }
                $sql="SELECT nameBrand, medPrice, medDescription from medapp";
                $result = $con->query($sql);
            
                if($result !== false && $result->num_rows > 0){
                     while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row["nameBrand"]."</td><td>".$row["medPrice"]."</td><td>".$row["medDescription"]."</td></tr>";
                     }
                         echo "</table>";

                     }
                      else{
                          echo "0 result";
                        }
                           $con->close();

                ?>
</div>  

               

       

        </center> 
      

</body>

</html>
<html>
<head>
     <title> edit buttons</title>
     <style>

        body{
            margin: 0px;
            padding: 0px;
            background:url(../images/new7.jpg)no-repeat ;
            background-size: cover;
        
        }
        h1{
            color:blue ;
            font-size:60px;
            margin-top: 20px;
        }
           
            
     .btn6{
        box-shadow:  0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
         background-color:darkred;
         padding: 20px 48px;
         border-radius: 8px;
         width: 500px;
         font-size: 30px;
         color: white;
         margin-bottom: 20px;
         margin-top: 70px;
         

     }
     .btn6:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
        .btn7{
        box-shadow:  0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
         background-color:darkred;
         padding: 20px 48px;
         border-radius: 8px;
         width: 500px;
         font-size: 30px;
         color: white;
         margin-bottom: 20px;
         margin-top: 30px;
         

     }
     .btn7:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

     
     
     
     </style>
  </head>
  <body>  
  <center>
      <h1> EDIT YOUR STORE</h1>
 <form action="adddata.php" method="post">
 <input type="submit" value="Add Data To The Store " class="btn6" name="btn-save6">
 </form> 

 <form action="updel.php" method="post">
 <input type="submit" value="Update Or Delete Data " class="btn7" name="btn-save7">
 </form> 




 </center>
  </body>
  </head>
  </html>
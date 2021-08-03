
<!DOCTYPE html>
 <HTML lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registation Form Using HTML5 and CSS3</title>
</head>
<body>
           
   
     <div class="signup-form">
          <img  src ="../images/Pic1.png">
          <form action="process.php" method="post">
               <input type="text" placeholder="User Name" class="txt" name="UserName">
               <input type="email" placeholder="Email" class="txt" name="Email">
               <input type="password" placeholder="Password" class="txt" name="Password">
               <input type="submit" value="Create an Account" class="btn" name="btn-save">   
          </form>
                <form action="login.php" method="post">
                <input type="submit" value="Log In" class="btn" name="btn-save3">
                </form>   

                <!-- <button onclick="location.href = 'login.php';" id="myButton" class="btn" >login</button> -->

            

           
</div>
</body>
</HTML>
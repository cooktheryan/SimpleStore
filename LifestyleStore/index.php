<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Big Kahuna Burger</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Milkshake Sale!.</h1>
                       <p>$1 off all milkshakes.</p>
                       <a href="milkshakes.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="burger.php">
                                <img src="img/plain.jpeg" alt="Burgers">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Burgers</p>
                                        <p>Welcome to burgertown.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="fries.php">
                               <img src="img/large.jpeg" alt="fries">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Fries</p>
                                    <p>All the fries!</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="milkshakes.php">
                               <img src="img/shake.jpeg" alt="Shakes">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shakes</p>
                                   <p>MMMM That's a tasty beverage.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Big Kahuna Burger. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Web Dev</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>

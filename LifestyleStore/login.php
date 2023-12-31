<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body style="background-color: #F4ABC4;">
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
           <div class="container" >
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3" style="border-color: white;" >
                        <div class="panel panel-primary" style="background-color: #333456;border-radius: 10px;">
                            <div class="panel-heading" style="background-color: #060930;border-radius: 10px;">
                                <h3>LOGIN</h3>
                            </div >
                            <div class="panel-body">
                                <p style="color: white;">Login to make a purchase.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer" style="background-color: #060930; color: white;border-radius: 10px;">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <footer class="footer" >
               <div class="container" >
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +91 8964811000</p>
                   <p>This website is developed by Vansh Raghuvanshi</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/loyalstyles.css">


        <meta charset="UTF-8"> 
        <meta name="description" content="Loyalty Docs Blog Page">
        <meta name="keywords" content="Frager, Dr. Alfred, Dr. Stan, Loyalty, Book, Docs">
        <meta name="author" content="Paul Cook">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>The Loyalty Docs Blog Page</title>
    </head>
    <body>
        <div align="center">
        <header>
            <div class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation"> 
                <div class="container"> 
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"> 
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">The Loyalty Docs</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse"> 
                        <ul class="nav navbar-nav navbar-right"> 
                            <li><a href="index.php">Home</a></li>
                            <li><a href="quote.php">People Are Saying</a></li>
                            <li><a href="about.php">About the Docs</a></li>
                            <li class="active"><a href="blog.php">The Docs Blog</a></li>
                            <li><a href="services.php">Our Services</a></li>
                            <li><a href="contact.php">Contact the Docs</a></li>
                            <li><a href="login_page.php">Docs Sign In</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <h1>The Loyalty Docs</h1>
            </div>
        </header>

    <h2>Doctors Blog</h2>
    
        <div class="container printedblog">
            <?php
                include("printblog.php");
            ?>
        </div>
    </div>
    </body>
            <script src="http://code.jquery.com/jquery.js"></script>
            <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
            <script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
    

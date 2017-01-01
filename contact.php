<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CODETECC | Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" /> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
        <link rel="icon" type="image/png" href="assets/img/logo-icon.png">
    </head>
    <body id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Codetecc Logo" height="50px"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <br>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="prices.html">Prices</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <h1>CODETECC<sup><small>&copy</small></sup></h1>
            <p>IT technologies for your business.</p>
        </div>

       <div class="container-fluid bg-grey">
           <h2 class="text-center">Contact Us</h2>
           <div class="row">
               <div class="col-sm-5 black-font">
                   <h4>Contact us to give you your price or to make a date.</h4>
                   <p><span class="glyphicon glyphicon-map-marker"></span> Address #123, Zip Code:00000, California, US</p>
                   <p><span class="glyphicon glyphicon-phone"></span> +00 3310331010</p>
                   <p><span class="glyphicon glyphicon-envelope"> information@codetecc.com</span></p>
               </div>
               <div class="col-sm-7 black-font">
                    <form action=" <?php $_SERVER["PHP_SELF"] ?>" name="contact" method="POST">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name">Your name:</label><br>
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name">Your email:</label><br>
                                <input type="email" class="form-control" name="email" placeholder="example@mail.com" required>
                            </div>
                        </div>
                        <label for="request">Request:</label>
                        <textarea class="form-control" rows="5" name="request" placeholder="Make your request" required></textarea>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-default pull-right" type="submit">Send!</button>
                            </div>
                        </div> 
                    </form>
               </div>
           </div>
       </div>
        
       <footer class="container-fluid text-center">
            <a href="#top" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Information of the webmaster</p> 
        </footer>

        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.metisMenu.js"></script>
    </body>
</html>
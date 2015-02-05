<?php ?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if IE 10]> <html class="ie10" lang="en"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]> <html lang="en"> <![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Skeleton Website">
        <meta name="author" content="Rolando Moreno">
        <title>Skeleton Website</title>

        <link rel="icon" type="image/png" href="images/bhLogo.png">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!--IPage server style sheets-->
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/bodyStyle.css">

        <!--Google Font-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <section id="header" class="container-fluid">
            <div id="headerTopRow" class="row">
                <div id="logo" class="col-xs-12 col-sm-6 col-md-4">
                    <img src="images/bhLogo.png">
                </div>
                <div  class="col-xs-12 col-sm-6 col-md-4 col-md-offset-4">
                    <div class="row">
                        <ul id="addressBar">
                            <li><span class="glyphicon glyphicon-earphone" aria-hidden="true">  305-555-1212</span></li>
                            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true">  developer@rolandomoreno.com</span></li>
                        </ul>
                    </div>
                    <div id="socialLinksRow" class="row">
                        <ul id="socialLinks">
                            <li><a href="#" class="twitter" title="Twitter" target="_blank"><img src="images/twitter.png"></a></li>
                            <li><a href="#" class="facebook" title="Facebook" target="_blank"><img src="images/fb.png"></a></li>
                            <li><a href="#" class="googleplus" title="Googleplus" target="_blank"><img src="images/plus.png"></a></li>
                            <li><a href="#" class="instagram" title="Instagram" target="_blank"><img src="images/instagram.png"></a></li>
                            <li><a href="#" class="linkedin" title="Linkedin" target="_blank"><img src="images/linked.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="headerBottomRow" class="col-xs-12 col-sm-12 col-md-12">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Tools</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </section>

        <section id="footer" class="container-fluid">
            <div id="topFooterRow" class="row">
                <div class="col-md-2 col-xs-12 col-sm-4">
                    <h2>About</h2>
                    <ul id="footerList">
                        <li><a href="#">About Rolando Moreno Developments</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div id="footer-shop" class="col-md-2 col-xs-12 col-sm-4">
                    <h2>Shop</h2>
                    <ul id="footerList">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Custom</a></li>
                    </ul>
                </div>
                <div id="footer-support" class="col-md-2 col-xs-12 col-sm-4">
                    <h2>Support</h2>
                    <ul id="footerList">
                        <li><a href="#">Hardware Support</a></li>
                        <li><a href="#">Software Support</a></li>
                        <li><a href="#">Repository</a></li>
                    </ul>
                </div>
                <div id="footer-account" class="col-md-2 col-xs-12 col-sm-4">
                    <h2>Account</h2>
                    <ul id="footerList">
                        <li><a href="#">Become a Member</a></li>
                        <li><a href="#">Account Login</a></li>
                    </ul>
                </div>
                <div id="footer-subscribe" class="col-md-4 col-xs-12 col-sm-8">
                    <h2>Subscribe to Rolando Moreno Developments</h2>
                    <div id="footerSocialLinksRow" class="row">
                        <ul id="footerSocialLinks">
                            <li><a href="#" class="twitter" title="Twitter" target="_blank"><img src="images/twitter.png"></a></li>
                            <li><a href="#" class="facebook" title="Facebook" target="_blank"><img src="images/fb.png"></a></li>
                            <li><a href="#" class="googleplus" title="Googleplus" target="_blank"><img src="images/plus.png"></a></li>
                            <li><a href="#" class="instagram" title="Instagram" target="_blank"><img src="images/instagram.png"></a></li>
                            <li><a href="#" class="linkedin" title="Linkedin" target="_blank"><img src="images/linked.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="bottomFooterRow" class="row">
                <div id="copyright" class="col-md-12 col-xs-12 col-sm-12">
                    <p>&copy <?php echo date("Y") ?> Rolando Moreno Software Developments Inc</p>
                </div>
            </div>
        </section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
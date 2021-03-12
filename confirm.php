<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <!--[if lt IE 9]>
        <script type="text/javascript"
            src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
        </script>
        <script type="text/javascript"
            src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
        </script>
        <![endif]-->
        <link rel="icon"
            href="img/favicon.png">
        <link rel="stylesheet" 
            type="text/css" 
            href="css/styles.min.css">
        <title>Renova | Confirm</title>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.html" class="navbar-text font-logo">
                        <img src="img/navbar-logo.png" alt="logo">
                        <strong>RENOVA</strong>
                    </a>
                    <button class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#main-nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right text-uppercase font-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="portfolio.html">Portfolio</a>
                        </li>
                        <li>
                            <a href="reviews.html">Reviews</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid confirm-s1 border-bottom border-red">
            <div class="row p-40 d-flex h-100vh">
                <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 text-center my-auto mx-auto">
                    <h3 class="text-center font-header">Message sent!</h3>
                    <table class="table table-hover text-left">
                        <thead>
                            <tr>
                                <th colspan="2" class="font-header">Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First name</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fname']))
                                        echo htmlspecialchars($_POST['fname']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['lname']))
                                        echo htmlspecialchars($_POST['lname']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fphone']))
                                        echo htmlspecialchars($_POST['fphone']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmail']))
                                        echo htmlspecialchars($_POST['fmail']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmsg']))
                                        echo htmlspecialchars($_POST['fmsg']);
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="contact.html" 
                        class="btn btn-info">OK</a>
                </div>
            </div>
        </div>
        <footer class="container-fluid bg-blk text-white p-20">
            <div class="row border-bottom border-slv pb-20 text-xs-center text-left">
                <div class="col-xs-12 col-sm-6">
                    <h4 class="font-logo text-red shadow-red">RENOVA</h4>
                    <ul class="list-unstyled initialism font-header">
                        <li>5th Ave. 12A</li>
                        <li>12640, Edmonton</li>
                        <li>renova&#64;mail.com<li>
                        <li>Orders: (678) 123-4567</li>
                        <li>Support: (678) 123-9876</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 pt-20">
                    <ul class="list-unstyled text-uppercase float-right float-xs-none footer-menu font-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="portfolio.html">Portfolio</a>
                        </li>
                        <li>
                            <a href="reviews.html">Reviews</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row text-center opacity-8 pt-20">
                <small class="font-header">
                    Copyright &copy; 2019-2021 Tomasz Pankowski
                    <a href="privacy.html" class="btn-link text-white">
                        Privacy policy
                    </a>
                </small>
            </div>
        </footer> 
        <div class="modal" id="privacyModal">
            <div class="modal-dialog">
                <div class="modal-content p-20">
                    <div class="modal-header text-center">
                        <h4 class="font-header text-primary">GPDR Declaration</h4>
                    </div>
                    <div class="modal-body">
                        <p class="initialism">
                            This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                            in long term meaning (longer than needed for website operation during visitor's
                            presence), any user (visitor) data. All information collected during visitor's 
                            presence on this website is used only for technical purposes, required for 
                            correct operation of website or demonstration purposes related to technical 
                            mechanisms and presentation of its operation... 
                            <a href="privacy.html" class="label label-primary">More about privacy</a>
                        </p>                        
                        <p class="initialism">
                            If you accept privacy policy please click button "accept". If you 
                            refuse it, leave page by closing it in your web browser, please.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button class="btn btn-success"
                                onclick="acceptPrivacyPolicy()">
                                Accept
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <script src="js/main.min.js"></script>
    </body>
</html>
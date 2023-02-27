<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

require('PHPMailer-master/src/Exception.php');
require('PHPMailer-master/src/PHPMailer.php');
require('PHPMailer-master/src/SMTP.php');
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject1 = "BUYER NOTIFY";


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    //to view proper logging details for success and error messages
    // $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
    $mail->Username = "bricoidofficial@gmail.com";   //email
    $mail->Password = 'mhncormecimjabzk';   //16 character obtained from app password created
    $mail->Port = 465;                    //SMTP port
    $mail->SMTPSecure = "ssl";


    //sender information
    $mail->setFrom($email, $name);

    //receiver address and name
    $mail->addAddress("bricoidofficial@gmail.com", "BRICO INDONESIA");


    // Add cc or bcc   
    // $mail->addCC('email@mail.com');  
    // $mail->addBCC('user@mail.com');  

    // $mail->addAttachment(__DIR__ . '/download.png');
    // // $mail->addAttachment(__DIR__ . '/exampleattachment2.jpg');


    $mail->isHTML(true);

    $mail->Subject = $subject1;
    $mail->Body    = "Name: " . $name . "\n"
    . "Email: " . $email . "\n\n"
    . "Phone :" . $phone . "\n\n"
    . "Message: " . $message;;

    // Send mail   
    if (!$mail->send()) {
        echo "
      <script>
      alert('Data Gagal Ditambahkan!');
      document.location.href = 'index.php';
      </script>
    ";
    } else {
        echo "
      <script>
      alert('Data Berhasil Ditambahkan!');
      document.location.href = 'index.php';
      </script>
    ";
    }

    $mail->smtpClose();
}

?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Logo.png" sizes="100x100">
    <title>Brico Indonesia</title>
</head>

<body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="blue-grey darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">Brico</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="catalog.php">Catalog</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><a href="#quality">Quality</a></li>
                        <li><a href="#product">Product</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidebar -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="catalog.php">Catalog</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="#quality">Quality</a></li>
        <li><a href="#product">Product</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>

    <!-- slider -->
    <div class="slider scrollspy" id="home">
        <ul class="slides">
            <li>
                <img src="img/bg.png"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Premium Quality Indonesian Charcoal Briquettes</h3>
                    <h5 class="light grey-text text-lighten-3">Made from the best coconut shell ash</h5>
                </div>
            </li>

            <li>
                <img src="img/KEBUN.png"> <!-- random image -->
                <div class="caption left-align">
                    <h3>From the Best Coconut in Indonesia</h3>
                    <h5 class="light grey-text text-lighten-3">The quality of Indonesian coconut is the best as a raw material for making charcoal briquettes.</h5>
                </div>
            </li>

            <li>
                <img src="img/pabrik.png"> <!-- random image -->
                <div class="caption right-align">
                    <h3>HIGH TECH PRODUCTION</h3>
                    <h5 class="light grey-text text-lighten-3">A high-tech production system that makes production results better and of higher quality.</h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- About Us-->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">About Us</h3>
                <div class="col m6">
                    <h5>We Are Professionals</h5>
                    <p>We as suppliers sell cheap coconut shell charcoal with the best quality in the world!

                        We provide the documents you need for further information in the catalog menu</p>
                </div>

                <div class="col m6">
                    <h5>Product Category</h5>
                    <li>Sisha</li>
                    <li>Barbeque</li>
                    <li>Halaban</li>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <div id="partners" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/parallaximg.jpg"></div>

        <div class="container partners">
            <h3 class="center light white-text">Our Partners</h3>
            <div class="row">
                <div class="col m4 s12 center">
                    <img src="img/g20.png" alt="">
                </div>

                <div class="col m4 s12 center">
                    <img src="img/kemendag.png" alt="">
                </div>

                <div class="col m4 s12 center">
                    <img src="img/bisaekspor.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Service -->
    <section id="quality" class="quality grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Our Quality</h3>

                <div class="col m3 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">sentiment_very_satisfied</i>
                        <h5>Eco Friendly</h5>
                    </div>
                </div>

                <div class="col m3 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">update</i>
                        <h5>Long Lasting</h5>
                    </div>
                </div>

                <div class="col m3 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">do_not_disturb_on</i>
                        <h5>Ash Less</h5>
                    </div>
                </div>

                <div class="col m3 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">opacity</i>
                        <h5>Less Water</h5>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section id="product" class="product scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Our Product</h3>
            <div class="row">
                <div class="col m4 s12">
                    <img src="img/newCube.png" class="responsive-img materialboxed">
                </div>

                <div class="col m4 s12">
                    <img src="img/newHex.png" class="responsive-img materialboxed">
                </div>

                <div class="col m4 s12">
                    <img src="img/newKaloud.png" class="responsive-img materialboxed">
                </div>
            </div>

            <div class="row">
                <div class="col m4 s12">
                    <img src="img/newHexa.png" class="responsive-img materialboxed">
                </div>

                <div class="col m4 s12">
                    <img src="img/newSaw.png" class="responsive-img materialboxed">
                </div>

                <div class="col m4 s12">
                    <img src="img/newHalaban.png" class="responsive-img materialboxed">
                </div>
            </div>
            <div class="center ">
                <a href="catalog.php" target="_blank" class="blue-grey darken-4 btn-large">More...</a>
            </div>
            
        </div>
    </section>

    <!-- Contact Us-->
    <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Contact Us</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel center blue-grey darken-4 white-text">
                        <i class="material-icons">email</i>
                        <h5>Contact</h5>
                        <p>bricoidofficial@gmail.com</p>
                        <p>+6287816952947</p>
                    </div>

                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4>Our Office</h4>
                        </li>
                        <li class="collection-item">PT Briquette Charcoal Indonesia</li>
                        <li class="collection-item">Jl. Umayah 1 786 Residance, Bandung</li>
                        <li class="collection-item">West Java, Indonesia</li>
                    </ul>
                </div>

                <div class="col m7 s12">
                    <form action="" method="post">
                        <div class="card-panel">
                            <h5>Fill in the form to find out the price</h5>
                            <div class="input-field">
                                <input type="text" name="name" id="name" class="validate" required>
                                <label for="name">Name</label>
                            </div>

                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="phone" id="phone" class="validate" required>
                                <label for="phone">Phone Number</label>
                            </div>

                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" name="submit" data-submit="...Sending" class="btn blue-grey darken-4">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="vidio">
        <div class="container">
            <div class="responsive-video center">
                <iframe width="100%" height="480" src="https://www.youtube.com/embed/TPsW1B6btLk" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <a href="https://wa.link/nf7qrl" class="wabutton" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Footer -->
    <footer class="blue-grey darken-4 white-text center">
        <p>Brico Indonesia. Copyright 2023.</p>
    </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
    </script>
</body>

</html>
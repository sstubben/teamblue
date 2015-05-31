<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'team@teamblue.my';                 // SMTP username
$mail->Password = '1234qwer';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$result ='';

if ($_POST["submit"]) {
    $mail->From = 'team@teamblue.my';
    $mail->FromName = 'Mailer';
    $mail->addAddress('simon.stubben@lionandlion.com');     // Add a recipient
    $mail->addReplyTo('info@example.com', 'Information');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Message from '.$_POST['name'].' to TeamBlue';
    $mail->Body    = 'From email: '. $_POST['email'].'\n Message: '.$_POST['message'];
    $mail->AltBody = $_POST['message'];

    if(!$mail->send()) {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    } else {
        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TeamBlue - NagaDDB + Lion & Lion</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img\logo.png" class="img-logo">TeamBlue</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="http://www.nagaddb.com.my/" target="_blank">NagaDDB</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://lionandlion.com/" target="_blank">Lion & Lion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                
                <h2>From math men to mad men.</h2>
                <h1>Team <div class="blue">blue</div></h1>

                <a href="./team/index.html" class="btn btn-primary btn-xl page-scroll">Meet the team</a>
                <a href="#contact" class="btn btn-primary btn-xl page-scroll">Contact us</a>
            </div>
        </div>
    </header>
    <div class="container-fluid container-blue">
        <div class="container text-center" id="contact">
        <h3>Talk to us.</h3>
        <hr>
        <h4>If you don't like what is being said, then change the conversation</h4>
        <small><i>- Don Draper</i></small>

            <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Name" value="">
            </div>
            <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Email Address" value="">

            </div>
            <div class="form-group">
                    <textarea class="form-control" name="message" required placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                    <input id="submit" name="submit" type="submit" value="Submit" class="submit btn btn-primary">
            </div>
            <div class="form-group">

                    <?php echo $result; ?> 

            </div>
        </form>
        </div>
    </div>
    <div class="container-fluid footer">
        <footer>
            <p class="text-center">&copy; TeamBlue 2015</p>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>

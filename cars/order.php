<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> CAR shopping </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

   <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

  <link href="css/responsive.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <nav class="navbar navbar-default">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>YOUR</span>CAR</h1>
              
                </a>
              </div>
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="">About</a>
                  </li>
                  <li>
                    
                  </li>
                   <li>
                    <a class="page-scroll" href="index.php">Products</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="admin.php">Admin</a>
                  </li>
                 
                  <li>
                    <a class="page-scroll" href="order.php">Order</a>
                  </li>
                </ul>
              </div>
               
  </header>
  
<body>
   <div id="contact" class="contact-area area-padding">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>ORDER NOW!</h2>
            </div>
          </div>
        </div>
        
        <div class="row">


          

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your order has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="order_conn.php" method="post">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="CAR Selction" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Order deatalies"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">ORDER</button><a class="ready-btn right-btn page-scroll" href="index.php">BACK</a></div>

              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +249110144714<br>
                  <span>Monday-Friday (9am-6pm)</span>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: carshoping@gmail.com.com<br>
         <span>Web: www.carshoping.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: A108 al wadi Street<br>
                  <span>NY 535022, omdurman</span>
                </p>
              </div>
            </div>
          </div>
        </div>


      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/venobox/venobox.min.js"></script>
      <script src="lib/knob/jquery.knob.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/parallax/parallax.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
      <script src="lib/appear/jquery.appear.js"></script>
      <script src="lib/isotope/isotope.pkgd.min.js"></script>
    

      <script src="contactform/contactform.js"></script>
    
      <script src="js/main.js"></script>
    </body>
    
    </html>
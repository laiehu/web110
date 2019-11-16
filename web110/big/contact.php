<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Joseph Rosario: Contact Page</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
     
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     
     
   <script src="js/script.js"></script>
 </head>
 <body>
     <!-- Wrapper for page-->
   <div class="wrapper">
   <main>
     <header>
        <h1><a href="index.html">Joseph Rosario: Contact Page</a></h1>
                <nav id="cssmenu">
                    <ul>
                        <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
                        <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>
                        <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                        <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
                        <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Gallery</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google</a>
                            <ul>
                                <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                                <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                                <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact (Joseph Rosario)</a></li>
                    </ul>
                </nav>
     </header>

<section class="fullwidth">
<h2 class="subheader">Contact Joseph Rosario</h2>
     <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "rosariojosephv29@gmail.com";  //place your/your client's email address here
        $toName = "Joseph Rosario"; //place your client's name here
        $website = "Joseph Rosario: WEB110 BIG Website Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
       <p class="clear-recaptcha"></p>
</section>



       
     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Joseph Rosario </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
 </div>
 </body>
</html>
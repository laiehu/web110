<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Joseph Rosario: Contact Page</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1>Joseph Rosario: Contact Page</h1>
     <nav class="topnav" id="myTopnav">
        <a href="index.html">Welcome</a>
        <a href="elements.html">HTML Elements</a>
        <a href="aia.html">AIA Elements</a>
        <a href="flowchart.html">Flowchart</a>
        <a href="big/index.html">BIG Project</a>
        <a href="http://w3schools.com" target="_blank">W3 Schools</a>
        <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
        <a href="contact.php" class="active">Contact Joseph Rosario</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </nav>
     </header>
     
   <main class="wrapper">
       
       <h2 class="subheader">Contact Joseph</h2>
       
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
        $website = "Joseph Rosario: WEB110 Portal Website Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
       <p class="clear-recaptcha"></p>
       
     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact (Joseph Rosario) </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>
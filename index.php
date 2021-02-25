<?php
error_reporting(0);
include("emailer.php");
$name = htmlentities(addslashes($_POST["name"]));
$email = htmlentities(addslashes($_POST["email"]));
$phone = htmlentities(addslashes($_POST["phone"]));
$type = htmlentities(addslashes($_POST["type"]));
$message = htmlentities(addslashes($_POST["message"]));

if($name != null && $email != null && $phone != null && $type != null && $message != null){
  $msg = "Name: ".$name."<br>";
  $msg .= "Email: ".$email."<br>";
  $msg .= "Phone: ".$phone."<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Project Drishti</title>
  </head>

  <body>
    <div class="circles">
      <a href="#slide_1"><div class="circle active"></div></a>
      <a href="#slide_2"><div class="circle"></div></a>
      <a href="#slide_3"><div class="circle"></div></a>
      <a href="#slide_4"><div class="circle"></div></a>
    </div>
    <div class="header">
      <div class="logo"><img src="images/logo.png" /><span>Drishti</span></div>
      <div class="navigation">
        <ul>
          <a href="#slide_2">
            <li>About</li>
          </a>
          <a href="#slide_3">
            <li>Team</li>
          </a>
          <a href="#slide_4">
            <li>Download</li>
          </a>
        </ul>
      </div>
    </div>
    <div id="slide_1">
      <img class="design" src="images/main.png" />
    </div>

    <div id="slide_4">
      <img src="images/uis.png" class="uis" />
      <div class="d_content">
        <h1>Download</h1>
        <span
          >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et
          nisi vestibulum, tincidunt dui sit amet, elementum ligula. Phasellus
          ac dictum ante. In ac nulla neque. Phasellus vel ligula nec risus
          dictum pellentesque id in turpis.</span
        ><br /><br />
        <a href="#"><img src="images/gplay.png" /></a>
        <a href="#"><img src="images/appstore.png" /></a>
      </div>
    </div>

    <div id="slide_5" class="contactform">
      <div class="margined">
        <h1>Contact</h1>
        <form method="post" action="./index.php">
          <input type="text" name="name" placeholder="Name *" required />
          <input type="text" name="email" placeholder="Email Address *" required />
          <input type="text" name="phone" placeholder="Phone Number *" required />
          <select name="type" required>
            <option value="default" disabled>Subject</option>
            <option value="bug" selected>Bug Report</option>
            <option value="question">Question</option>
            <option value="feedback">Feedback</option>
          </select>
          <textarea placeholder="Your Message..." required></textarea>
          <input type="submit" class="button" value="Send" />
        </form>
      </div>
      <div class="footer">
        <div>&copy; Incubate Nepal 2020</div>
        <div>
          <a href="privacy-policy"> Privacy Policy </a>

          <a href="terms-and-conditions"> Terms & Conditions </a>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>

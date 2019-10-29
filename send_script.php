<?php
if (isset($_POST['send_message_btn'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];
  $comments = $_POST['comments'];
  // Content-Type helps email client to parse file as HTML
  // therefore retaining styles
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>" . $firstname . "</h1><h1>" . $lastname . "</h1>
  	<p>".$email."</p>
    <p>".$zip."</p>
    <p>".$phone."</p>
    <p>".$comments."</p>
  </body>
  </html>";
  if (mail('piecorab@gmail.com', "New Inquiry!", $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>

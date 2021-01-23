<?php
if (isset($_POST['name']) && isset($_POST['email'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $location = 'itsnameissteven@gmail.com';
  $subject = 'New Subscriber';
  $body = '<html>
              <body>
                 <h2> FeedBack</h2>
                 <hr>
                 <p>Name<br>'.$name.'</p>
                 <p>Email<br>'.$email.'</p>
              </body>
            </html>';
  $headers = "From: ".$name." <".$email.">\r\n";
  $headers .= "Reply-To: ".$email."\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset-utf-8";
  $send = mail($to, $subject, $body, $headers);
}




// ## CONFIG ##

// # LIST EMAIL ADDRESS
// $recipient = "itsnameissteven@gmail.com";

// # SUBJECT (Subscribe/Remove)
// $subject = "Subscribe";

// # RESULT PAGE
// $location = "index.html";

// ## FORM VALUES ##

// # SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
// # DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
// $sender = $recipient;

// # MAIL BODY
// $body .= "Name: ".$_REQUEST['name']." \n";
// $body .= "Email: ".$_REQUEST['email']." \n";
// # add more fields here if required

// ## SEND MESSGAE ##

// mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

// ## SHOW RESULT PAGE ##

// header( "Location: $location" );
?>
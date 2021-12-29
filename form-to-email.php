<?php
  if ( $_POST ) {

    $recepient = 'kontakt@futurewebstudio.pl'; // your e-mail
    $sitename  = 'Strona TMS'; // your site name
    $subject   = "Nowa wiadomość ze strony TMS \"$sitename\""; // subject template

    $name  = trim( $_POST['visitor_name'] );
    $email = trim( $_POST['visitor_email'] );
    $msg   = trim( $_POST['visitor_msg'] );

    $message = "
    -------------------<br><br>
    Imię: $name <br>
    Email: $email <br><br>
    $msg
    <br><br>-------------------
    ";

    mail( $recepient, $subject, $message, "Od: $name <$email>" . "\r\n" . "Odpowiedz do: $email" . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset="utf-8"' );

  }

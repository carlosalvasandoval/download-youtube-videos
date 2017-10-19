<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/vendor/autoload.php';

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') :

  $comentario = stripslashes($_POST["comentario"]);
  $email = stripslashes($_POST["email"]);

  $recaptcha = $_POST["g-recaptcha-response"];

  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret'   => '6Let-zQUAAAAAF6S_PPCvvEm1QMjdQqkrYeOuCht',
    'response' => $recaptcha
  );
  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context = stream_context_create($options);
  $verify = file_get_contents($url, false, $context);
  $captcha_success = json_decode($verify);
  if ($captcha_success->success)
  {
    //correo
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try
    {
      //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'info@descargarvideoyoutube.com';                 // SMTP username
      $mail->Password = '998485332';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to
      //Recipients
      $mail->setFrom('info@descargarvideoyoutube.com', 'DvY');
      $mail->addAddress('carlos.alva.sandoval@gmail.com', 'Carlos Alva');     // Add a recipient
//      $mail->addAddress('ellen@example.com');               // Name is optional
//      $mail->addReplyTo('info@example.com', 'Information');
//      $mail->addCC('cc@example.com');
//      $mail->addBCC('bcc@example.com');

      //Attachments
//      $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//      $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Mensaje de DVY';
      $mail->Body = "<b>Correo</b>:$email <br><br>"
          . "<b>Comentario</b>:<br>$comentario";
//      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
    }
    catch (Exception $e)
    {
//      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    //fin correo
    $respuesta = array(
      'status' => 1
    );
  }
  else
  {
    $respuesta = array(
      'status' => 0
    );
  }
  echo json_encode($respuesta);
else:
  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <title>403 Forbidden</title>
    </head>
    <body>

      <p>Directory access is forbidden.</p>

    </body>
  </html>
         <?php 
endif;

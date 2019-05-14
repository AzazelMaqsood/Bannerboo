<?php

require 'db.php';

require_once "libs/mailer/PHPMailerAutoload.php";

if($_POST && isset($_POST['result']))
{
    // $recipient_email    = "recipient@yourmail.com"; //recepient
    // $from_email         = "info@your_domain.com"; //from email using site domain.
    // $subject            = "Attachment email from your website!"; //email subject line

    // $sender_name = 'skullhead99@mail.ru'; //capture sender name
    // $sender_email = 'skullhead99@mail.ru'; //capture sender email
    // $sender_message = 'skullhead99@mail.ru'; //capture message
    $sender_name = $_SESSION['logged_user']['name'];
    $sender_email = $_SESSION['logged_user']['email'];
    // $attachments = $_FILES;
    // $format = $_POST['format'];
    // $advertising = $_POST['advertising'];
    $result = $_POST['result'];
    


    // $file_count = count($attachments['name']); //count total files attached
    // $boundary = md5("sanwebe.com"); 

    // if($file_count > 0){ //if attachment exists
    //     //header
    //     $headers = "MIME-Version: 1.0\r\n"; 
    //     $headers .= "From:".$from_email."\r\n"; 
    //     $headers .= "Reply-To: ".$sender_email."" . "\r\n";
    //     $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 

    //     //message text
    //     $body = "--$boundary\r\n";
    //     $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    //     $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    //     $body .= chunk_split(base64_encode($sender_message)); 

    //     //attachments
    //     for ($x = 0; $x < $file_count; $x++){       
    //         if(!empty($attachments['name'][$x])){



    //             $body .= "--$boundary\r\n";
               
    //             $body .="Content-Transfer-Encoding: base64\r\n";
    //             $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    //             $body .= $encoded_content; 
    //         }
    //     }

    // }else{ //send plain email otherwise
    //    $headers = "From:".$from_email."\r\n".
    //     "Reply-To: ".$sender_email. "\n" .
    //     "X-Mailer: PHP/" . phpversion();
    //     $body = $sender_message;
    // }

    //  $sentMail = @mail($recipient_email, $subject, $body, $headers);
    // if($sentMail) //output success or failure messages
    // {       
    //     die('Thank you for your email');
    // }else{
    //     die('Could not send mail! Please check your PHP mail configuration.');  
    // }

    $mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'user@example.com';                 // SMTP username
// $mail->Password = 'secret';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

$mail->isMail();
$mail->CharSet = 'UTF-8';   
$mail->setFrom('from@gobanner.com', 'GoBanner заказ баннера');
$mail->addAddress('sales@gobanner.ru');     // Add a recipient
$mail->addReplyTo('sales@gobanner.ru');
$mail->addCC('sales@gobanner.ru');
$mail->addBCC('sales@gobanner.ru');

// $mail->addAttachment($attachments['upload_fonts']['tmp_name'], $attachments['upload_fonts']['name']);         // Add attachments
// $mail->addAttachment($attachments['upload_logo']['tmp_name'], $attachments['upload_logo']['name']); 
// $mail->addAttachment($attachments['upload_creative']['tmp_name'], $attachments['upload_creative']['name']);         // Add attachments
// $mail->addAttachment($attachments['upload_banner']['tmp_name'], $attachments['upload_banner']['name']);
// $mail->addAttachment($attachments['upload_material']['tmp_name'], $attachments['upload_material']['name']); 
  // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заказ с сайта GoBanner от: '.$sender_name.' Желаемый результат';
$mail->Body    = 'E-mail заказчика: '.$sender_email.'<br>Желаемый результат: '.$result.'';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($mail->send()) {
    echo'<script>window.location.href="http://host1760558.hostland.pro/views/campaigns.php"; </script>'; // поменять на серваке
}
}
?>
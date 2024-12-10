<?php
session_start();
// Namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library
require 'lib/phpmailer/Exception.php';
require 'lib/phpmailer/PHPMailer.php';
require 'lib/phpmailer/SMTP.php';
// load captcha library
// require 'vendor/google/recaptcha/src/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

// Check if user submitted the contact form
if (isset($_POST['first_name'], $_POST['email'],  $_POST['persons'], $_POST['date'], $_POST['time'])) {
    // Errors array
    $errors = [];
    // Extra values to store in the database
    $extra = [
        'phone' => '',
        'message' => '',
    ];
    // Form validation
    // Check to see if the email is valid.
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address!';
    }
    // First name must contain only alphabet characters.
    // if (!preg_match('/^[a-zA-Z]+$/', $_POST['first_name'])) {
    //     $errors['first_name'] = 'First name must contain only characters!';
    // }
    // first name must match letters from any language, spacers, apostrophes and hyphens
    if (!preg_match('/^[\p{L}\s\'\-]+$/', $_POST['first_name'])) {
        $errors['first_name'] = 'First name must contain only characters!';
    }

    // phone number must contain only numbers, () ,- and + characters
    if (!preg_match('/^[\d\(\)\-\+]+$/', $_POST['phone'])) {
        $errors['phone'] = 'Please enter a valid phone number!';
    }

    // number of persons must be between 1 and 20
    if ($_POST['persons'] < 1 || $_POST['persons'] > 20) {
        $errors['persons'] = 'Please enter a number between 1 and 20!';
    }

    // date must date and date must be in the future
    if (!strtotime($_POST['date']) || strtotime($_POST['date']) < strtotime('today')) {
        $errors['date'] = 'Please enter a valid date!';
    }

    // time must be set
    if (!isset($_POST['time']) || empty($_POST['time'])) {
        $errors['time'] = 'Please select a time!';
    }



    // 
    // Message must not be empty
    // if (empty($_POST['message'])) {
    //     $errors['message'] = 'Please enter your message!';
    // }
    // $recaptcha = new \ReCaptcha\ReCaptcha('6LfUEvQpAAAAACbwRQhjNcRkek6bp8t07UiB8CNb');
    // $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    // if (!$resp->isSuccess()) {
    //     $errors['recaptcha'] = 'Captcha validation failed. Please try again.';
    // }

    // If no errors exist
    if (!$errors) {
        // check if all other fields are set and not empty , sanitze them and store them in the extra array
        foreach ($extra as $key => $value) {
            if (isset($_POST[$key]) && !empty($_POST[$key])) {
                $extra[$key] = htmlspecialchars($_POST[$key]);
            }
        }

        // format the date into 'monday 12 october 2020'
        $dateReservation = date('l j F Y', strtotime($_POST['date']));

        // Prepare the final message
        $final_msg = 'Name: ' . $_POST['first_name'] . '<br>';
        // check if the email is set and not empty
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $final_msg .= 'Email: ' . $_POST['email'] . '<br>';
        }
        // check if the phone is set and not empty
        if (isset($_POST['phone']) && !empty($_POST['phone'])) {
            $final_msg .= 'Phone: ' . $_POST['phone'] . '<br>';
        }
        $final_msg .= 'Number of persons: ' . $_POST['persons'] . '<br>';
        $final_msg .= 'Date: ' . $dateReservation . '<br>';
        $final_msg .= 'Time: ' . $_POST['time'] . '<br>';
        // check if the message is set and not empty
        if (isset($_POST['message']) && !empty($_POST['message'])) {
            $final_msg .= 'Message: ' . $_POST['message'] . '<br>';
        }

        // Try to send the mail using PHPMailer
        try {
            // Server settings

            // Recipients
            $mail->setFrom('info@artrestaurantmanezinho.com', $_POST['first_name']);
            $mail->addAddress('reservations@artrestaurantmanezinho.com', 'Support');
            $mail->addReplyTo($_POST['email'], $_POST['first_name']);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'RESERVATION for '  . $_POST['first_name'] . ' - ' . $_POST['email'];
            $mail->Body = $final_msg;
            $mail->AltBody = strip_tags($final_msg);
            // Send mail
            $mail->send();
            // Output success message
            echo '{"success":"<p>We will confirm your reservation as soon as possible!</p>"}';
        } catch (Exception $e) {
            // Output error message
            $errors[] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            echo '{"errors":' . json_encode($errors) . '}';
        }
    } else {
        // Could not send message, output error
        echo '{"errors":' . json_encode($errors) . '}';
    }
}

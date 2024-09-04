<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize input data
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstname = $lastname = $email = $phone = $companyname = "";
    $firstname_err = $lastname_err = $email_err = $phone_err = $companyname_err = "";

    if (empty($_POST["firstname"])) {
        $firstname_err = "First Name is required";
    } else {
        $firstname = sanitize_input($_POST["firstname"]);
    }

    if (empty($_POST["lastname"])) {
        $lastname_err = "Last Name is required";
    } else {
        $lastname = sanitize_input($_POST["lastname"]);
    }

    if (empty($_POST["email"])) {
        $email_err = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
    }

    if (empty($_POST["phone"])) {
        $phone_err = "Phone is required";
    } else {
        $phone = sanitize_input($_POST["phone"]);
    }

    if (empty($_POST["companyname"])) {
        $companyname_err = "Company Name is required";
    } else {
        $companyname = sanitize_input($_POST["companyname"]);
    }

    if (empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($phone_err) && empty($companyname_err)) {
        $mail = new PHPMailer(true); 

        // Email sending code
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'luxoreclat@gmail.com'; 
            $mail->Password = 'gxrwdjfykogrtxvn'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; 

            $mail->setFrom('luxoreclat@gmail.com', 'Ez2payment');
            $mail->addAddress('luxoreclat@gmail.com', 'Ez2payment');

            $mail->isHTML(false);
            $mail->Subject = 'Ez2payement';
            $mail->Body = "First Name: $firstname\n";
            $mail->Body .= "Last Name: $lastname\n";
            $mail->Body .= "Email: $email\n";
            $mail->Body .= "Phone: $phone\n";
            $mail->Body .= "Company Name: $companyname\n";

            $mail->send();
            $data = [
                'status' => true,
            ];
            echo json_encode($data);
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $errors = [
            'firstname_err' => $firstname_err,
            'lastname_err' => $lastname_err,
            'email_err' => $email_err,
            'phone_err' => $phone_err,
            'companyname_err' => $companyname_err
        ];
        echo json_encode($errors);
    }
}
?>

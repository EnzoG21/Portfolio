<?php
require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Function to sanitize form inputs
function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form inputs
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $subject = sanitize_input($_POST["subject"]);
    $message = sanitize_input($_POST["message"]);

    // Configure PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'help.ehuvikings@gmail.com'; //'bobb32781@gmail.com';
        $mail->Password = 'vwdphwjmdwxhvgxn'; //'mnptqhyrzwzyfjyy';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender and recipient settings
        $mail->setFrom('help.ehuvikings@gmail.com', 'EHU Vikings Website');
        $mail->addAddress('help.ehuvikings@gmail.com', 'EHU Vikings Website');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<h3>Name: $name</h3><br><h3>Email: $email</h3><br><h3>Message: $message</h3>";

        // Send the email
        $mail->send();

        // Display success message
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        // Display error message
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHU Vikings</title>
    <link rel="icon" href="/image/ehuvik.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<style>
    .container2 {
    max-width: 400px;
    margin: 0 auto;
    background-color: #f5f5f5;
    border-radius: 2px;
}

.container2 label {
    display: block;
    margin-bottom: 5px;
    color: white;
}

.container2 input[type="text"],
.container2 input[type="email"],
.container2 textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
    color: white
}

.container2 textarea {
    resize: vertical;
}

.container2 input[type="submit"] {
    display: block;
    margin: 0 auto;
    background-color: #4CAF50;
    color: white;
    padding: 10px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.container2 input[type="submit"]:hover {
    background-color: #45a049;
}

@media (max-width: 768px) {
    .container2 {
        max-width: 90%;
    }
}
</style>
<body>

    <nav class="navbar">
            <!-- LOGO -->
            <div class="logo">
                <img src="image/ehuvik.png" alt="Logo of EHU Vikings">
            </div>
        
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
        
                <!-- USING CHECKBOX HACK -->
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        
                <!-- NAVIGATION MENUS -->
                <div class="menu">
        
                    <li><a href="index.html">Home</a></li>
                    <li><a href="profile.html">Coaches</a></li>
        
                    <li class="services">
                        <a href="#">Seasons</a>
        
                        <!-- DROPDOWN MENU -->
                        <ul class="dropdown">
                            <li><a href="2324seas.html">2023-2024</a></li>
                            <li><a href="2223seas.html">2022-2023</a></li>
                        </ul>
        
                    </li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="https://m.facebook.com/groups/625552246126284/?ref=sharehttps://m.facebook.com/groups/625552246126284/?ref=share&exp=9594">Join the Family</a></li>
        

                    <li class="services">
          <a href="#">Gallery</a>

          <!-- DROPDOWN MENU -->
          <ul class="dropdown">
            <li><a href="2324photos.php">2023-2024</a></li>
            <li><a href="2223photos.php">2022-2023</a></li>
            
          </ul>

        </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://www.facebook.com/EHUVikings/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/ehuvikings/?hl=en"><i class="fab fa-instagram"></i></a></li>
                </div>
            </ul>
        </nav>


    <div class="container2">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="subject">Subject of you Email:</label>
            <input type="text" name="subject" required><br><br>

            <label for="message">Message:</label><br>
            <textarea name="message" rows="5" cols="40" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

<footer>
	<p>&copy; 2023 Edge Hill Vikings. All rights reserved. <a href="privacy.html">Privacy Policy</a></p>
</footer>
</body>

</html>
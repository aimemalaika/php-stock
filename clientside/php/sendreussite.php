<?php
    
    ob_start();
            $to = $_POST['mail'];
            $subject = 'Account created';
            $from_user = "company Human ressources";
            $from_email = "server.email.forwarder@gmail.com";
            date_default_timezone_set('Etc/UTC');

            require '../../PHPMailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->SMTPDebug = 2;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'server.email.forwarder@gmail.com';                 // SMTP username
            $mail->Password = 'Peaceall236@';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom($from_email, $from_user);
            $mail->addAddress($to, "");     // Add a recipient
            $mail->addReplyTo($from_email, $from_user);
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = $subject;
            
                $mail->Body    = '
                    <html>
                        <body>
                            <div align="center">
                                <img style="width:100%" src="https://amutangana.com/images/courses/baniere.jpg"/>
                                <br /> 
                                <p style="font-size: 20px;font-family: cursive;">Dear user<br>You have passed the test of recrutement.</p>
                                <p style="font-size: 15px;font-family: cursive;"> this are your credidential for any change consult the administrateur</p>
                                <br />
                                <p>Full name : '.$_POST['username'].'</p>
                                <p>Date of birth : '.$_POST['dob'].'</p>
                                <p>Nationality : '.$_POST['natio'].'</p>
                                <p>Beginning of contract : '.$_POST['bofcontrat'].'</p>
                                <p>End of contract  : '.$_POST['eofcontrat'].'</p>
                                <p>email address  : '.$_POST['mail'].'</p>
                                <p>grade  : '.$_POST['rang'].'</p>
                                <p>phone number  : '.$_POST['phone'].'</p>
                                <p>password : '.$password.'</p>
                                <br><p>to go to your account click on this link <a href="localhost/cedrick/clientside/index.php">Go home for login</a></p>
                                <p>Thank you for being part of us.</p>
                                <img src="https://amutangana.com/images/courses/line.jpg"/>
                            </div>
                        </body>
                    </html>
                ';
                if(!$mail->send()) {
                    header('Location: ');
                } else {
                    header('Location: ../../conf.html');
                }

?>

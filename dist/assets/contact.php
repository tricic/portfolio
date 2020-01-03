<?php
    if(isset($_POST['submit'])) {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
            $name  = trim($_POST['name']);
            $mail  = trim($_POST['email']);
            $msg   = trim($_POST['text']);
            $from    = "contact@ismardev.com";
            $to      = "ismar.tricic@gmail.com";
            $subject = 'Contact | IsmarDev.com';
            
            $headers  = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
            $headers .= "From: $name <$from>\r\n";
            $msg = "
                <html>
                    <head>
                    </head>
                    <body>
                        <p>Ime: $name</p>
                        <p>Email: $mail</p>
                        <p>Poruka: $msg</p>
                    </body>
                </html>
            ";
            if(mail($to, $subject, $msg, $headers)) {
                header("Location: http://ismardev.dev?success=true#contact");
            } else {
                header("Location: http://ismardev.dev?success=false#contact");
            }
        }
    }
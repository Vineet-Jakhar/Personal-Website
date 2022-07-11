<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    $to = "vineetjakhar5432100@gmail.com";
    $subject='From Portfolio Contact Form';
    $message="Name: ".$name."\n"."Email: ".$email."\n\n"."Subject: ".$sub."\n\n"."Message: ".$msg;

    $mailheader = "From: ".$email;
    
    
    if(mail($to, $subject, $message, $mailheader)){
        echo'<!DOCTYPE html>
        <!-- Created By CodingNepal -->
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sent</title>
            <link rel="icon" href="images/icon.jpeg">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
            <script src="https://kit.fontawesome.com/38bd9f1332.js" crossorigin="anonymous"></script>
          
        </head>
        <body>
            <div class="contactsuccess">
                <h1>Thanks for contacting!</h1>
                <p>Have a nice day..<br>
                Go back to <a href="index.html">Homepage</a>
            </p>
            </div>
        </body>
        </html>';
    }
    else{
        echo"Something went wrong :(";
    }




    //     //redirect
//     header("Location:contactsuccess.html");
// 

?>

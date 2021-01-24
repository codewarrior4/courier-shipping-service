<?php
if (isset($_POST['mail']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $recipient = 'admin@emgss.net';
    $message = '
    <html>
    <head>
    <title>New Message </title>
    </head>
    <body>
    <h3>A new message from Emggs!</h3>
    <table>
    <tr>
    <td><strong>Name:</strong></td><td>'.$name.'</td>
    </tr>
    <tr>
    <td><strong>Email:</strong></td><td>'.$email.'</td>
    </tr>
    <tr>
    <td><strong>Subject:</strong></td><td>'.$subject.'</td>
    </tr>
    <tr>
    <td><strong>Message:</strong></td><td>'.$message.'</td>
    </tr>
    </table>
    </body>
    </html>
    ';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

mail($recipient,$subject,$message, implode("\r\n", $headers));
header("location: https://emgss.net?message_sent_successfully");
}


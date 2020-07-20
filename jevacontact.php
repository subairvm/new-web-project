<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

if (empty($name) || empty($email) || empty($subject) || empty($message))
{
    echo "Please Fill  All The Fields";
}
else{
    mail("subairvm69@gmail.com", "Webtech Message", $message , "From: $name < $email>");
    echo "<script type='text/javascript'>alert('Your Message Sent Successfully');
    window.history.log(-1);
    </script>";
    
}

?>
<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $mailForm = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "info@marquezweb.com";
    $headers = "From: ".$mailForm;
    $txt = "You have received an e-mail from". $name." ".$lastname.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: Contact.php?mailsend");
}


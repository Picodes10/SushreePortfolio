<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "biswalsushree000@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have a message ".$name.$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location: index.html?MessageSent");
}
?>

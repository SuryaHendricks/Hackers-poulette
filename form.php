<?php
include_once('functions.php');
?>

<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$mail = $_POST['mail'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$clientMsg = 'We have recieve your message, dont respond to this automatic message';
$messageBody =
    'Firstname : ' . $first_name . '<br>' .
    'Lastname : ' . $last_name . '<br>' .
    'Gender : ' . $gender . '<br>' .
    'Country : ' . $country . '<br>' .
    'Message : ' . $message;

//--------------------------condition of validity--------------------------
if (isset($_POST['submit'])) {
    // -----firstname validation------
    if ($first_name == "") {
        $first_name_error = "You must complete this field!";
    } else if (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
        $first_name_error = "Only letters are allowed!";
    }
    //------Lastname validation--------
    if ($last_name == "") {
        $last_name_error = "You must complete this field!";
    } else if (!preg_match("/^[a-zA-Z]*$/", $last_name)) {
        $last_name_error = "Only letters are allowed!";
    }
    //------Gender validation----------
    if ($gender == "") {
        $gender_error = "You must select your gender!";
    }
    //------Email validation-----------
    if ($mail == "") {
        $mail_error = "You must complete this field!";
    }
    //------Country validation---------
    if ($country == "") {
        $country_error = "You must complete this field!";
    }
    //------Message validation---------
    if ($message == "") {
        $message_error = "You must complete this field!";
    }
    //------Send mail------------------
    if (
        $first_name_error == ""
        && $last_name_error == ""
        && $gender_error == ""
        && $mail_error == ""
        && $country_error == ""
        && $message_error == ""
    ) {
        sendmail($subject, $messageBody);
        sendmailtoclient($clientMsg, $mail);

    }

}



?>



<?php

$formValid = false;
$errorClassName = 'contact-form-error';

// Check if the form has been submitted

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    echo $name;
}

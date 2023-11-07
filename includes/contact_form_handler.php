<?php

include './includes/sanitize_input.php';

$formErrors = [];
$formInputs = [];
$formValid = true;
$errorClassName = 'contact-form-error';
$ukPhoneRegex = '#((\+44\s?\(0\)\s?\d{2,4})|(\+44\s?(01|02|03|07|08)\d{2,3})|(\+44\s?(1|2|3|7|8)\d{2,3})|(\(\+44\)\s?\d{3,4})|(\(\d{5}\))|((01|02|03|07|08)\d{2,3})|(\d{5}))(\s|-|.)(((\d{3,4})(\s|-)(\d{3,4}))|((\d{6,7})))#';


// Check if the form has been submitted

if (isset($_POST['submit'])) {
    $name = sanitize($_POST['name']);
    $company = sanitize($_POST['company']);
    $email = sanitize($_POST['email']);
    $telephone = sanitize($_POST['telephone']);
    $message = sanitize($_POST['message']);

    // Validate the form inputs
    if (empty($name)) {
        $formErrors['name'] = 'Please enter your name';
        $formInputs['name'] = $name;
        $formValid = false;
    } else {
        $formInputs['name'] = $name;
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (empty($email)) {
            $formErrors['email'] = 'Please enter your email address';
        } else {
            $formErrors['email'] = 'Please enter a valid email address';
        }
        $formInputs['email'] = $email;
        $formValid = false;
    } else {
        $formInputs['email'] = $email;
    }

    if (empty($telephone) || !preg_match($ukPhoneRegex, $telephone)) {
        if (empty($telephone)) {
            $formErrors['telephone'] = 'Please enter your telephone number';
        } else {
            $formErrors['telephone'] = 'Please enter a valid UK telephone number';
        }
        $formInputs['telephone'] = $telephone;
        $formValid = false;
    } else {
        $formInputs['telephone'] = $telephone;
    }

    if (empty($message)) {
        $formErrors['message'] = 'Please enter a message';
        $formInputs['message'] = $message;
        $formValid = false;
    } else {
        $formInputs['message'] = $message;
    }

    $formInputs['company'] = $company;

    if ($formValid) {
        include './includes/contact_form_valid.php';
    }
}

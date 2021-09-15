<?php ob_start(); ?>
<?php session_start(); ?>
<?php include_once "includes/db.php"; ?>
<?php include_once "functions.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../css/fontawesome.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <!--International Telephone input JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
    <link rel="stylesheet" href="https://www.bulksmsservices.net/components/com_spc/smsapi.php?username=Barth&password=excellence&sender=@@sender@@&recipient=@@recipient@@&message=@@message@@&">
    <title>CABMAN</title>
    <style>
        .form-group .input-group .input-group-prepend,
        .form-group .input-group .input-group-append {
            margin: 0;
            padding: 0 20px;
            background: white;
        }
    </style>
</head>
<body>

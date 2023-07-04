<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!$_SESSION["loggedin"] === true) {
    header("location: login.php");
    exit;
}
require_once('./core/db-config.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leads Pro - Lead management System</title>
    <link rel="stylesheet" href="./assets/vendors/core/core.css">
    <link rel="stylesheet" href="./assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="./assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
    <link rel="stylesheet" href="./assets/vendors/dropzone/dropzone.min.css">
    <link rel="stylesheet" href="./assets/vendors/dropify/dist/dropify.min.css">
    <link rel="stylesheet" href="./assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="./assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="./assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="./assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/css/demo_1/style.css">
    <link rel="stylesheet" href="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="./assets/vendors/core/core.js"></script>
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">
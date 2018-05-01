<!-- base_start.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php isset($title) ?: $title = 'Healthy Pharma'; echo $title ?></title>
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        
        <style>
            .container .row {
                position: absolute;
                top: 20%;
                left: 35%;
            }
            .navbar-brand{
                font-family: impact;
                font-size: 20pt;
            }
            .jumbotron {
            position: relative;
            background: #333333;
            width: 100%;
            height: 100%;
            background-size: cover;
            overflow: hidden;
            }
            .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #ffffff;
            }

            .container .text-footer {
            margin: 20px 0;
            }
        </style>
    </head>
    <body>
    <?php $this->load->view('layouts/header') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking css file -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css">
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>

    <link rel="icon" href="<?=base_url()?>/img/oie_oie_trim_image.png" type="image/gif">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbarScroll">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('portfolio/index')?>">ZenG192000</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('portfolio/index')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/ZenG192000" target="_blank">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('portfolio/contact')?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('portfolio/about')?>">About</a>
                    </li>
                </ul>  
            </div>
        </div>
    </nav>

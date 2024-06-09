<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?php echo $page_title; ?> - Malcolmn Lismore Photography</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="./assets/img/log.png" rel="icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link  rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>" />
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="./assets/img/Mal.png" alt="" class="img-fluid" /></a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>" href="./index.php">Home</a></li>
                    <li><a class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>" href="./about.php">About Me</a></li>
                    <li><a class="<?php echo ($current_page == 'services') ? 'active' : ''; ?>" href="./services.php">Services</a></li>
                    <li><a class="<?php echo ($current_page == 'pricing') ? 'active' : ''; ?>" href="./pricing.php">Pricing</a></li>
                    <li><a class="<?php echo ($current_page == 'portfolio') ? 'active' : ''; ?>" href="./portfolio.php">Portfolio</a></li>
                    <li><a class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>" href="./contactUs.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

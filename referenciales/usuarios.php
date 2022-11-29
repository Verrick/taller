<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>eaguero | Menu Principal</title>
    <?php include_once '../helpers/linkimport.php'; ?>
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Aguarde un momento...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <?php include_once '../pages/header.php'; ?>
    <!-- #Top Bar -->

    <!-- Left Sidebar -->
    <?php include_once '../pages/leftbar.php';?>
    <!-- END Left Sidebar -->


    <section class="content">
        <div class="container-fluid">
            
        </div>
    </section>

<?php require_once '../helpers/scriptimport.php';?>
</body>
</html>

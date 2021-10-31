<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/mdb.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    
    <div class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo"><h1>ECOART</h1></div>
                <div class="header-search">
                    <form>
                        <input type="text" name="search" placeholder="Caută articole, colecții, artiști">
                    </form>
                </div>
                <div class="header-navigator">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>" class="<?php echo ($this->router->fetch_class() == 'home') ? 'active' : ''; ?>">Explorează</a></li>
                        <li><a href="<?php echo base_url('servicii'); ?>" class="<?php echo ($this->router->fetch_class() == 'servicii') ? 'active' : ''; ?>">Servicii</a></li>
                        <li><a href="<?php echo base_url('planuri'); ?>" class="<?php echo ($this->router->fetch_class() == 'planuri') ? 'active' : ''; ?>">Resurse</a></li>
                        <li><a href="<?php echo base_url('testimoniale'); ?>" class="<?php echo ($this->router->fetch_class() == 'testimoniale') ? 'active' : ''; ?>">Creează</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
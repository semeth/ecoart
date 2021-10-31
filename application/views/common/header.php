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
    
    <div class="header bg-dark">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo"><img src="<?php echo base_url('assets/img/wdr-logo.png'); ?>"></div>
                <div class="header-navigator">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>" class="<?php echo ($this->router->fetch_class() == 'home') ? 'active' : ''; ?>">Acasa</a></li>
                        <li><a href="<?php echo base_url('servicii'); ?>" class="<?php echo ($this->router->fetch_class() == 'servicii') ? 'active' : ''; ?>">Servicii</a></li>
                        <li><a href="<?php echo base_url('planuri'); ?>" class="<?php echo ($this->router->fetch_class() == 'planuri') ? 'active' : ''; ?>">Planuri</a></li>
                        <li><a href="<?php echo base_url('testimoniale'); ?>" class="<?php echo ($this->router->fetch_class() == 'testimoniale') ? 'active' : ''; ?>">Testimoniale</a></li>
                        <li><a href="<?php echo base_url('contact'); ?>" class="<?php echo ($this->router->fetch_class() == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                        <li><a href="<?php echo base_url('blog'); ?>" class="<?php echo ($this->router->fetch_class() == 'blog') ? 'active' : ''; ?>">Blog</a></li>
                        <li><a href="<?php echo base_url('parteneriat'); ?>" class="btn btn-blue">Program Parteneriat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
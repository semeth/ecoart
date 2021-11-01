<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/mdb.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    
    <div class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo"><h1>ECOART</h1></div>
                <div class="header-search">
                    <form>
                        <i class="fa fa-search"></i><input type="text" name="search" placeholder="Caută articole, colecții, artiști">
                    </form>
                </div>
                <div class="header-navigator">
                    <ul>
                        <li><a href="<?php echo base_url('exploreaza'); ?>" class="<?php echo ($this->router->fetch_class() == 'exploreaza') ? 'active' : ''; ?>">Explorează</a></li>
                        <li><a href="<?php echo base_url('activitate'); ?>" class="<?php echo ($this->router->fetch_class() == 'activitate') ? 'active' : ''; ?>">Activitate</a></li>
                        <li><a href="<?php echo base_url('resurse'); ?>" class="<?php echo ($this->router->fetch_class() == 'resurse') ? 'active' : ''; ?>">Resurse</a></li>
                        <li><a href="<?php echo base_url('creeaza'); ?>" class="<?php echo ($this->router->fetch_class() == 'creeaza') ? 'active' : ''; ?>">Creează</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
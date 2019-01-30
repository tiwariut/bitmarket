<html>
   <head>
       <title>bitMarket</title>
       <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
       <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
   </head>
   <body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <a class="navbar-brand" href="<?php echo base_url(); ?>">bitMarket</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url(); ?>products">Products</a>
               </li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url(); ?>products/create">Upload Product</a>
               </li>
           </ul>
       </div>
   </nav>

   <div class="container">

       <!-- Flash Messages -->
       <?php if($this->session->flashdata('user_registered')): ?>
           <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '<p>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('product_created')): ?>
           <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_created') . '<p>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('product_deleted')): ?>
           <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_deleted') . '<p>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('product_updated')): ?>
           <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_updated') . '<p>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedin')): ?>
           <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '<p>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
           <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '<p>'; ?>
       <?php endif; ?>


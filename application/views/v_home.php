<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>Mahmud Rasih ÇELENLİOĞLU</title>
	<link rel="stylesheet" href="<?= site_url() ?>assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/custom.css" type="text/css" />
</head>
<body style="background: url(<?= site_url() ?>assets/img/bg.jpg) repeat;">
    <div class="navbar navbar-static-top">
       <div class="navbar-inner">
            <a class="brand"><?php echo $user_name ?></a>
            <ul class="nav">
            	<li class="active"><a href="<?= site_url() ?>application/views/v_home">Anasayfa</a></li>
                <!--
                <li><a href="#">Yayınlar</a></li>
                <li><a href="#">Tezler</a></li>
                -->
                <li><a href="<?= site_url() ?>application/views/v_education">Eğitim</a></li>
                <!--
                <li><a href="#">Dersler</a></li>
                <li><a href="#">CV</a></li>
                <li><a href="#">Kim Bu Çocuk?</a></li>
                -->
            </ul>
        </div>
    </div>
<div class="container-fluid spaceUp">
    <div class="hero-unit bglightgrey">
    	<div class="row-fluid">
    		<div class="span3">
    			<img class="img-polaroid" src="<?= site_url() ?>assets/img/profil.jpg" />
    		</div>    	
    		<div class="span9">
    			<div class="row-fluid">
    				<!-- NAME & SURNAME -->
    				<div class="span6">
    					<h2 class="text-info"><?php echo $user_name . ' ' . $user_surname ?></h2>
    				</div>
    				<!-- EMPTY -->
    				<div class="span6">
    				</div>
    			</div>
    			<div class="row-fluid">
    				<!-- UNIVERSITY -->
    				<div class="span6">
    					<p><?php echo $user_university ?></p>
    				</div>
    				<!-- MAIL -->
    				<div class="span6">
    					<p><?php echo $user_mail ?></p>
    				</div>
    			</div>
    			<div class="row-fluid">
    				<!-- DEPARTMENT -->
    				<div class="span6">
    					<p><?php echo $user_department ?></p>
    				</div>
    				<!-- PHONE -->
    				<div class="span6">
    					<p><?php echo $user_work_phone ?></p>
    				</div>
    			</div>
    			<div class="row-fluid">
    				<!-- POSITION -->
    				<div class="span6">
    					<p><?php echo $user_position ?></p>
    				</div>
    				<!-- ADDRESS -->
    				<div class="span6">
    					<p><?php echo $user_work_address ?></p>
    				</div>
    			</div>
    			<div class="row-fluid">
    				<!-- RESEARCH -->
    				<div class="span6">
    					<p><?php echo $user_research_areas ?></p>
    				</div>
    				<!-- ROOM -->
    				<div class="span6">
    					<p><?php echo $user_work_room ?></p>
    				</div>
    			</div>
    			<div class="row-fluid">
    				<!-- EDUCATION -->
    				<div class="span6">
    					<p><?php echo $user_education ?></p>
    				</div>
    				<!-- LOCATION -->
    				<div class="span6">
    					<p><?php echo $user_work_location ?></p>
    				</div>
    			</div>
        	</div>
        </div>
    </div>
    <div class="hero-unit bglightgrey">
    		<h2 class="text-info text-center">"<?php echo $user_quote ?>"</h2>
    </div>
</div>
<script src="<?= site_url() ?>assets/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
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
    		<div class="page-header">
    			<h2>Example page header<small>Subtext for header</small></h2>
    		</div>
    </div>
</div>
<script src="<?= site_url() ?>assets/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
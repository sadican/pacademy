<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title><?php echo $name . ' ' . $surname ?></title>
	<link rel="stylesheet" href="<?= site_url() ?>assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/custom.css" type="text/css" />
</head>
<body style="background: url(<?= site_url() ?>assets/img/bg.jpg) repeat;">
    <div class="navbar navbar-static-top">
       <div class="navbar-inner centerMe">
            <a class="brand"><?php echo $header_name ?></a>
            <ul class="nav">
            	<li><a href="<?= site_url() ?>">Anasayfa</a></li>
                <li><a href="education">Eğitim</a></li>
            </ul>
        </div>
    </div>
<div class="container-fluid spaceUp">
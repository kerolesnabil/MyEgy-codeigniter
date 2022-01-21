<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title><?=config_item('site_name')?></title>

	<link href="<?=site_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?=site_url('assets/css/style.css');?>" rel="stylesheet">

</head>
<section id="topbar" class="d-flex align-items-center">
	<div class="container d-flex justify-content-center justify-content-md-between">
		<div class="contact-info d-flex align-items-center">
			<i class="bi bi-phone -main- d-flex align-items-center ms-4">

				<a href="<?= site_url('admin/dashboard') ?>">
					<img  style="height: 30px; width: 100px"
					  src="<?= site_url('assets/img/MyEgy.png'); ?>">
				</a>
			</i>

			<i class="bi bi-phone d-flex align-items-center ms-4">
				<?=mailto('keroles.nabil.official@gmail.com',
					'<i class="icon-user" ></i>keroles@codeigniter.tv',
					array('title'=>'email'));?>

			</i>
			<i class="bi bi-phone d-flex align-items-center ms-4">
				<?=anchor('admin/user/logout',
					'<i class="icon-off"></i>logout',
					array('title'=>'logout'));?>
			</i>
		</div>
	</div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
	<div class="container d-flex align-items-center justify-content-between">


		<h1 class="logo">
			<?= anchor('admin/dashboard','<span >'.  config_item('site_name') .'</span>', array('title'=>'Site name') ) ?>
		</h1>
		<nav id="navbar" class="navbar">
			<ul>
				<li>
					<a class="nav-link scrollto active" href="<?= site_url('admin/dashboard') ?>">
						Dashboard
					</a>
				</li>
				<li>
					<?= anchor('admin/user','users') ?>
				</li>



			</ul>
		</nav>

	</div>
</header>

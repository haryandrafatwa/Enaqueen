<html>
	<head>
		<meta charset="utf-8">
		<title>Enaqueen | Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-signin-client_id" content="664499148646-6irjsskl9ph5eafhihqnb7dsgaf6a47f.apps.googleusercontent.com">

		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?= base_url();?>/assets/template/front/css/nav_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Saira:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

		<script src="https://cdn.firebase.com/libs/firebaseui/4.2.0/firebaseui.js"></script>
		<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/4.2.0/firebaseui.css" />
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

		<link rel="shortcut icon" href="<?= base_url();?>/assets/template/front/img/icons/crown.png">

	</head>

	<body>
		<section>
			<nav class="navbar navbar-expand-lg navbar-dark static-top bg-topbar">
			  <div class="container">
				<a class="navbar-brand" href="<?= base_url(); ?>">
					<img src="<?= base_url();?>/assets/template/front/img/icons/crown.png" alt="" width="50" height="30">
        <span><strong>ENAQUEEN</strong></span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link language" href="<?= base_url();?>User/Home/Food">FOOD</a>
						</li>
						<li class="nav-item">
							<a class="nav-link language" href="<?= base_url();?>User/Home/Drink">DRINK</a>
						</li>
						<li class="nav-item">
							<a class="nav-link language" href="<?= base_url();?>User/Home/Dessert">DESSERT</a>
						</li>
						<li class="nav-item" style="">
							<a href="#" class="nav-link">PROMOTION</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0 ml-auto">
						<input id="input-search" class="form-control mr-sm-2 search-nav" type="search" placeholder="Search" aria-label="Search" style="background-color: transparent;border: 2px white solid;border-radius: 10px;color:white">
					  <button class="btn-search" type="submit" style="margin-left: -50px;background-color: transparent;border: none"><div class="fas fa-search" style="color: white"></div></button>
					</form>
					<ul class="navbar-nav ml-4">
						<li class="nav-item dropdown">
							<span class="nav-link language" data-toggle="dropdown"><i class="fas fa-shopping-cart fa-lg" style="color:white"></i></span>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 12px;width:300px">
								<div class="container">
									<div class="col-12">
										<span style="font-size: 18px;font-weight: normal;color: white">MY CART</span>
									</div>
									<div class="col-12">
										<div class="dropdown-divider" style="border: 0.5px solid white;margin-top: 20px"></div>
									</div>
									<div class="col-12" style="text-align: center;padding: 20px" id="cart-empty">
										<span style="font-size: 18px;font-weight: normal;color: white">Your Cart is Empty</span>
									</div>
									<div style="">
										<div class="container" id="cart-avail" style="display: none">
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item ml-2">
							<a href="javascript:toOtherPage('<?= base_url();?>Welcome/Login');">
								<span class="nav-link"><i class="fas fa-user fa-lg" style="color:white"></i></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

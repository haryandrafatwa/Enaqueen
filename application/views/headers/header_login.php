<html>
	<head>
		<meta charset="utf-8">
		<title>Enaqueen | <?= $judul; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-signin-client_id" content="664499148646-6irjsskl9ph5eafhihqnb7dsgaf6a47f.apps.googleusercontent.com">

		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?= base_url();?>/assets/template/front/css/nav_styles.css">
		<link rel="stylesheet" href="<?= base_url();?>/assets/template/front/css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Saira:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

		<link rel="shortcut icon" href="<?= base_url();?>/assets/template/front/img/icons/crown.png">

	</head>

	<body>
		<style>

			.view-detail-cart{
				color: white!important;
			}

			.view-detail-cart:hover{
				color: #808080!important;
				cursor: pointer!important;
				text-decoration: none!important;
			}

		</style>
		<section>
			<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-topbar" id="bg-topbar">
			  <div class="container">
				<a class="navbar-brand" href="<?= base_url(); ?>User/Home">
					<img src="<?= base_url();?>/assets/template/front/img/icons/crown.png" alt="" width="50" height="30">
        			<span><strong>ENAQUEEN</strong></span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link language" href="<?= base_url();?>User/Home/Product?type=Food">FOOD</a>
						</li>
						<li class="nav-item">
							<a class="nav-link language" href="<?= base_url();?>User/Home/Product?type=Drink">DRINK</a>
						</li>
						<li class="nav-item">
							<a class="nav-link language" href="<?= base_url();?>User/Home/Product?type=Dessert">DESSERT</a>
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
						<li class="nav-item dropdown" id="navbarCart">
							<span class="nav-link language" data-toggle="dropdown" id="bahasa" style="margin-top: 14px">
								<img src="<?= base_url();?>assets/template/front/img/icons/cart.png" alt="" width="30" height="25" >
							</span>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 7.9px;width:420px">
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
									<div style="col-12">
										<div class="container" id="cart-avail" style="display: none">
											<?php $total_price = 0; foreach ($cart as $cart):?>
											<div class="row">
												<div class="col-2">
													<?php
														echo '<img src="data:image/;base64,'.$cart->photo.'" class="nav-link language" alt="" width="60" height="60" style = "border-radius:50px"/>';
													?>
												</div>
												<div class="col-4 ml-4">
													<div class="row">
														<span style="color:white"><?php echo $cart->product_name;?></span>
													</div>
													<div class="row">
														<span style="color:white">QTY: <?php echo $cart->amount;?></span>
													</div>
												</div>
												<div class="col-4" style="" >
													<div class="row">
														<span style="color:white;margin-top: 10px">IDR
															<?php
																echo number_format($cart->totalprice,0,'.','.');
															?>
														</span>
													</div>
												</div>
												<div class="col-1" style="margin-left: -18px">
													<button onClick="deleteAlert('<?= $username; ?>','<?php echo $cart->product_name?>');" class="fas fa-trash-alt" style="background-color: transparent;border: none;color: white;margin-top: 12px"></button>
												</div>
											</div>
											<?php $total_price = $total_price+$cart->totalprice; endforeach; ?>
											<div class="row" style="background-color: rgba(51,51,51);padding: 8px">
												<div class="col-3" style="margin-top: 4px">
													<a href="<?= base_url();?>User/Home/Cart" class="view-detail-cart" style="font-size: 12px">View Detail</a>
												</div>
												<div class="col-9" style="text-align: right">
													<span style="color:white">Total Price: <b>IDR <?php
															echo number_format($total_price,0,'.','.');
														?></b></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item ml-2 dropdown">
							<span class="nav-link language" data-toggle="dropdown" id="bahasa">
								<?php
									echo '<img src="data:image/;base64,'.$photoProfile.'" class="nav-link language" alt="" width="50" height="50" style = "border-radius:50px"/>';
								?>
							</span>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 7.9px;">
								<center><a href="<?= base_url();?>User/MyAccount" class="dropdown-item">MY PROFILE</a></center>
								<center><a href="<?= base_url();?>User/Home/DataUser" class="dropdown-item" style="display: none" id="dataUser">DATA USER</a></center>
								<center><a href="<?= base_url();?>User/Home/DataTransaksi" class="dropdown-item" style="display: none" id="dataTransaksi">DATA TRANSAKSI</a></center>
								<center><a href="<?= base_url();?>Auth/Logout" class="dropdown-item" id="logout">LOGOUT</a></center>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<script>

			window.onload = function(){

				console.log("<?= $username;?>");
				var cart = <?= $statusCart; ?>;
				var username = "<?= $username; ?>";

				console.log(cart);
				if(cart == 1){
					document.getElementById("cart-empty").style.display = "none";
					document.getElementById("cart-avail").style.display = "block";
				}else{
					document.getElementById("cart-empty").style.display = "block";
					document.getElementById("cart-avail").style.display = "none";
				}
			}

			function deleteAlert(username,food,drink,dessert){

				console.log("ini food "+food);
				console.log("ini drink "+drink);
				console.log("ini dessert "+dessert);

				const swalWithBootstrapButtons = Swal.mixin({
				  customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger'
				  },
				  buttonsStyling: true
				})

				swalWithBootstrapButtons.fire({
				  title: 'Are you sure?',
				  text: "You won't be able to revert this!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonText: 'Yes, delete it!',
				  cancelButtonText: 'No, cancel!',
				  reverseButtons: true
				}).then((result) => {
				  if (result.value) {
					swalWithBootstrapButtons.fire(
					  'Deleted!',
					  'Your item has been deleted.',
					  'success'
					).then((result) => {
						if(food != ""){
							window.location = "<?= base_url(); ?>User/Home/deleteFromCart/"+username+"/"+food+"/Food";
						}else if(drink != ""){
							window.location = "<?= base_url(); ?>User/Home/deleteFromCart/"+username+"/"+drink+"/Drink";
						}else if(dessert != ""){
							window.location = "<?= base_url(); ?>User/Home/deleteFromCart/"+username+"/"+dessert+"/Dessert";
						}

					});
				  } else if (
					 //Read more about handling dismissals below
					result.dismiss === Swal.DismissReason.cancel
				  ) {
					swalWithBootstrapButtons.fire(
					  'Cancelled',
					  'Your imaginary file is safe :)',
					  'error'
					)
				  }
				});
			}
		</script>

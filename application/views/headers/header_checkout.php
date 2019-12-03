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
				<a class="navbar-brand" href="javascript:backAlert('<?= base_url(); ?>User/Home/Cart')">
					<img src="<?= base_url();?>/assets/template/front/img/icons/crown.png" alt="" width="50" height="30">
        			<span><strong>ENAQUEEN</strong></span>
				</a>
				</div>
			</div>
		</nav>
		<script>

			console.log("<?= $username;?>");

			function backAlert(base_url){

				const swalWithBootstrapButtons = Swal.mixin({
				  customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger'
				  },
				  buttonsStyling: true
				})

				swalWithBootstrapButtons.fire({
				  title: 'Go back to cart?',
				  text: "Changes you make on this page will not be saved!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonText: 'Go back & delete changes',
				  cancelButtonText: 'Stay in this page',
				  reverseButtons: true
				}).then((result) => {
				  if (result.value) {
					window.location = base_url;
				  }
				});
			}
		</script>

<!doctype html>
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
		<link rel="stylesheet" href="<?= base_url();?>/assets/template/front/css/login_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Saira&display=swap" rel="stylesheet">

		<script src="https://cdn.firebase.com/libs/firebaseui/4.2.0/firebaseui.js"></script>
		<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/4.2.0/firebaseui.css" />
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>

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
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<span id="doesnt" class="btn text-1">Doesn't have an account?</span>
					</li>
					<li class="nav-item">
						<a id="btn-register" class="nav-link" href="javascript:toOtherPage('<?= base_url();?>Welcome/Register')"><button class="masuk">REGISTER</button></a>
					</li>
					<li class="nav-item dropdown">
						<span class="nav-link language" data-toggle="dropdown" id="bahasa">
							<i class="fas fa-globe"></i>  ENGLISH
						</span>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a href="" class="dropdown-item" id="highlighted">English</a>
							<a href="" class="dropdown-item">Deutsch</a>
							<a href="" class="dropdown-item">Español</a>
							<a href="" class="dropdown-item">Français</a>
							<a href="" class="dropdown-item">日本語</a>
							<a href="" class="dropdown-item">한국어</a>
							<a href="" class="dropdown-item">Português (Brasileiro)</a>
							<a href="" class="dropdown-item">Русский</a>
							<a href="" class="dropdown-item"><span >简体中文</span></a>
							<a href="" class="dropdown-item"><span >繁體中文</span> (Hong Kong)</a>
							<a href="" class="dropdown-item"><span >繁體中文</span> (Taiwan)</a>
							<a href="" class="dropdown-item">Bahasa Melayu</a>
							<a href="" class="dropdown-item">ภาษาไทย</a>
							<a href="" class="dropdown-item">Tiếng Việt</a>
							<a href="" class="dropdown-item">Bahasa Indonesia</a>
						</div>
					</li>
					<li class="nav-item" style="">
						<a href="#" class="nav-link">SUPPORT</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
			<div class="container justify-content-center">
				<div id="jumbo-login" class="jumbotron" style="margin-left: auto; margin-right: auto;">
					<div class="row justify-content-center title-form" style="margin-top: 40px;">
						<span>Login your account now</span>
					</div>
					<div class="row justify-content-center" style="">
						<form action="#" method="post" id="signUpFormUser" style="width: 100%;padding-left: 10%;padding-right: 10%">
							<div class="field justify-content-center" style="">
								<input type="text" name="username_field" id="username_field" placeholder="">
								<label for="username_field" class="text-label label-placeholder" style="">Username</label>
							</div>
							<div class="field" style="">
								<input type="password" name="pass_field" id="pass_field" placeholder="">
								<label for="pass_field" class="text-label label-placeholder" style="">Password</label>
								<span toggle="#pass_field" class="fas fa-eye fa-lg field-icon toggle-password"  style=""></span>
							</div>
							<div class="field-forgot" style="">
								<a href="#" style="color: #888;"><span style="font-size: 14px;">Forgot password?</span></a>
							</div>
							<div class="field" style="margin-top: 80px">
								<input type="submit" onClick="login()" name="submit" value="LOG IN" style="width: 100%;height:50px;font-size: 16px;border-radius: 10px;font-weight: bolder;border: none" id="btn-razer">
							</div>
						</form>
					</div>
					<div class="row justify-content-center" style="padding-left: 10%;padding-right: 10%;margin-top: 40px;margin-bottom: 40px">
						<input onClick="javascript:toOtherPage('<?= base_url();?>Welcome/Register')" class="masuk" type="button" value="REGISTER A NEW ACCOUNT" name="register" id="" style="width: 100%;height:50px;font-size: 16px;border-radius: 10px;font-weight: bolder;">
					</div>
				</div>
				<div class="container" style="">
					<div class="row justify-content-center">
						<a class="footer" href="#">Enaqueen.com</a>
					</div>
					<div class="row justify-content-center">
						<span class="footer-text">Copyright © 2019 Enaqueen Co. All rights reserved.</span>
					</div>
				</div>
			</div>
		</section>
		<script>var base_url = '<?php echo base_url(); ?>';</script>
		<script src="<?= base_url(); ?>js/auth.js"></script>
		<script>

			firebase.auth().onAuthStateChanged(function(user){
				if	(user){
					var email = user.email;
					var dn = user.displayName;
					var UID = user.uid;
					var pp = user.photoURL;
					var phoneNumber = user.phoneNumber;
					firebase.database().ref("users").once('value', function(snapshot) {
						snapshot.forEach(function(childSnapshot) {
							var childKey = childSnapshot.key;
							var childData = childSnapshot.val();
							if (UID == childKey){
								window.location.href = "<?= base_url(); ?>Home";
							}
						});
					});
				}
			});

			function toOtherPage(base_url){
				window.location.href = base_url;
			}
		</script>
	</body>
	<script>
		$(".toggle-password").click(function() {
			$(this).toggleClass("fa-eye-white");
			var input = $($(this).attr("toggle"));
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			}else{
				input.attr("type", "password");
			}
		});

		function clearPhone(){
			document.getElementById("phoneNumber").value = "";
		}
	</script>
</html>

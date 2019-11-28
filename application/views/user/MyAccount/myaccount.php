<style>
	.jmb-item{
		color: white;
		font-weight: 600
	}

	.jmb-isi{
		color: white;
	}

	.left-item{
		color: white;
	}

	.left-item:hover{
		color: rgba(51,51,51,0.5);
		text-decoration: none
	}

	.jmb-isi:hover{
		color: #808080;
		text-decoration: none
	}
</style>

<div style="margin-left: auto;margin-right: auto">
	<div class="container" style="">
		<div class="row" style="margin-top: 100px;">
			<div class="col-2">
				<div class="row" style="">
					<a href="<?=base_url();?>User/MyAccount" class="left-item" style="font-size: 18px;font-weight: 600">MY ACCOUNT</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="<?=base_url();?>User/MyAccount/Profile" class="left-item">Profile</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="<?=base_url();?>User/MyAccount/AddressBook" class="left-item">Address Book</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="#" class="left-item">Saved Carts</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="#" class="left-item">Order History</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="#" class="left-item">Newsletter</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="#" class="left-item">FAQ</a>
				</div>
			</div>
			<div class="col-5" style="">
				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: rgba(51,51,51,0.5);padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">PROFILE</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">Update your personal details</a>
								</div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">Change your email address</a>
								</div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">Change your password</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: rgba(51,51,51,0.5);padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">SAVED CART</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">View your saved carts</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: rgba(51,51,51,0.5);padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">DELETE ACCOUNT</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px;margin-top:35px">
									<button onclick="deleteUser(<?= $username ?>)" style="background-color: red;border: none;border-radius: 10px;font-size: 16px;padding: 6px;width: 100%;color: white">DELETE MY ACCOUNT</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-5" style="">
				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: rgba(51,51,51,0.5);padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">ADDRESS BOOK</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="<?=base_url();?>User/MyAccount/AddressBook" class="jmb-isi">Manage your delivery addresses</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: rgba(51,51,51,0.5);padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">ORDER HISTORY</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">View your order history</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: rgba(51,51,51,0.5);padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">NEWSLETTER</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">Manage your subscriptions</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
		</div>
</div>
<script type="text/javascript">
	var username = "<?= $username;?>";
	if(username == "admin"){
		document.getElementById("navbarCart").style.display = "none";
		document.getElementById("dataUser").style.display = "block";
		document.getElementById("dataTransaksi").style.display = "block";
	}

	function deleteUser(username){
		var username = btoa(username);
		window.location = "<?= base_url(); ?>User/MyAccount/deleteUser/user="+username;
	}
</script>

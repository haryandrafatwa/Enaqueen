<style>
	.btn-putih{
		background-color: white;
	}

	.content-lbl{
		color: white;
	}

	.content-txt{
		color: white
	}

	.active{
		color: white;
		font-weight: 600;
		font-size: 24px
	}

	.left-item{
		color: white;
	}

	.left-item:hover{
		color: rgba(51,51,51,0.5);
		text-decoration: none
	}
</style>
<div style="margin-left: auto;margin-right: auto;padding-bottom: 46px;margin-top: 100px">
	<div class="container" style="">
		<div class="row" style="">
					<div class="col-2">
						<div class="row" style="">
							<a href="<?=base_url();?>User/MyAccount" class="left-item" style="font-size: 18px;font-weight: 600">MY ACCOUNT</a>
						</div>
						<div class="row" style="padding-top: 28px;">
							<a href="<?=base_url();?>User/MyAccount/Profile" class="left-item" style="color: rgba(51,51,51,0.8);">Profile</a>
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
					<div class="col-10" style="">
						<div class="container">
							<div class="row">
								<div class="col-12" >
									<span class="active">Profile</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">First Name</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt">
													<?php
														if($firstname == null){
															echo "-";
														}else{
															echo $firstname;
														}
													?>
												</span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="margin-top: 20px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">Last Name</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt">
													<?php
														if($lastname == null){
															echo "-";
														}else{
															echo $lastname;
														}
													?>
												</span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="margin-top: 20px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">Full Name</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt">
													<?php
														if($lastname == null && $firstname == null){
															echo "-";
														}else{
															if($firstname == null || $firstname == "-"){
																echo $lastname;
															}else if ($lastname == null || $lastname == "-"){
																echo $firstname;
															}else{
																echo $firstname," ",$lastname;
															}
														}
													?>
												</span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="margin-top: 20px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">Email Address</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt">
													<?php
														if($email == null){
															echo "-";
														}else{
															echo $email;
														}
													?>
												</span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="">
									<div class="container" style="padding: 0px;margin-top: 20px">
										<div class="row" >
											<div class="col-4" style="">
												<a href="#"><span class="btn btn-putih">CHANGE YOUR PASSWORD<span style="color: #0f0">></span></span></a>
											</div>
											<div class="col-5">
												<a href="<?= base_url();?>User/MyAccount/PersonalDetail"><span class="btn btn-putih text-uppercase">Update your personal details<span style="color: #0f0">></span></span></a>
											</div>
											<div class="col-3">
												<a href="#"><span class="btn btn-putih text-uppercase">Update your email<span style="color: #0f0">></span></span></a>
											</div>
										</div>
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
	var email = '<?= $this->session->userdata('email'); ?>';
	if(email == null){
		document.getElementById("btn-addCart").onclick = function(){
			alert('Anda Belom login');
		}
	}
	var username = "<?= $username;?>";
	if(username == "admin"){
		document.getElementById("navbarCart").style.display = "none";
		document.getElementById("dataUser").style.display = "block";
		document.getElementById("dataTransaksi").style.display = "block";
	}
</script>

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
							<a href="<?=base_url();?>User/MyAccount/Profile" class="left-item">Profile</a>
						</div>
						<div class="row" style="padding-top: 28px;">
							<a href="<?=base_url();?>User/MyAccount/AddressBook" class="left-item" style="color: rgba(51,51,51,0.8);">Address Book</a>
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
							<form action="<?= base_url(); ?>User/MyAccount/addAddress" method="post">
							<div class="row">
								<div class="col-12" >
									<span class="active">Address Book</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;margin-bottom: 10px">
									<span class="content-lbl">Please use this form to add/edit an address </span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-6">
									<div class="container" style="padding: 0px">
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">First Name</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px;filter: contrast(0.5)" name="firstName" readonly value="<?= $firstname;?>">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Street Address</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="streetAdd" required>
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Street Address 2 (Optional)</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="streetAdd2">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">City</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="city" required>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="container" style="padding: 0px">
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Last Name</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px;filter: contrast(0.5)" name="lastName" readonly value="<?= $firstname;?>">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Apt, Suite, Building (optional)</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="building">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Province</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="province" required>
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">ZIP Code</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="zip" onKeyPress="isInputNumber(event)" required>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" style="margin-top: 20px">
								<div class="col-6">
									<input class="btn" type="submit" style="background-color: white" value="SAVE ADDRESS">
								</div>
							</div>
						</div>
							</form>
					</div>
				</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function isInputNumber(evt){
		var ch = String.fromCharCode(evt.which);

		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
	}
</script>

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
							<div class="row">
								<div class="col-12" >
									<span class="active">Address Book</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;margin-bottom: 10px">
									<span class="content-lbl">Manage your address book</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<?php foreach($address as $add): ?>
							<div class="row" style="margin-top:
													20px">
								<div class="col-4">
									<div class="container">
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"><?php
												if($firstname == "-" || $firstname =="" || $lastname == "-" || $lastname =="" ) echo $firstname;
												else echo $firstname." ".$lastname;?></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"><?= $add->street;?></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"><?= $add->building;?></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"><?= $add->street2;?></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"><?= $add->city;?></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"><?= $add->zip;?></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"><?= $add->province;?></span>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<?php endforeach; ?>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;margin-bottom: 10px">
									<button class="btn" style="background-color: white" onClick="toOtherPage('<?= base_url();?>User/MyAccount/AddNewAddress')">ADD NEW ADDRESS</button>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<script type="text/javascript">

	function toOtherPage(base_url){
		window.location = base_url;
	}

</script>

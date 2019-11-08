<style>
	.div-footer{
		position: absolute;
		bottom: 0;
		width: 100%
	}
</style>

<div style="margin-left: auto;margin-right: auto;margin-top: 60px">
<div class="container" style="">
  <div class="row">
    <div class="col-12">
      <div class="">
        <h1 style="color: white">PERSONAL INFO</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="">
        <span style="font-size: 18px;color: white">This information is never shared publicly.</span>
      </div>
    </div>
  </div>
	<form action="<?= base_url();?>User/MyAccount/updatePersonalDetail" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="col-8" style="margin-top: 20px">
					<div class="row" style="background-color: rgba(51,51,51,1);font-size: 18px;padding: 10px 0px">
						<div class="col-4">
							<span style="color: white">Full Name</span>
						</div>
						<div class="col-8">
							<center><input required name="firstname" type="text" value="<?php
															if($firstname == null){
																echo "-";
															}else{
																echo $firstname;
															} 
														?>" style="background-color: transparent;border: none;color: white;"></center>
						</div>
					</div>
					<div class="row" style="background-color: rgba(51,51,51,1);font-size: 18px;padding: 10px 0px;margin-top: 6px">
						<div class="col-4">
							<span style="color: white">Last Name</span>
						</div>
						<div class="col-8">
							<center><input required name="lastname" type="text" value="<?php
															if($lastname == null){
																echo "-";
															}else{
																echo $lastname;
															} 
														?>" style="background-color: transparent;border: none;color: white;"></center>
						</div>
					</div>
					<div class="row" style="background-color: rgba(51,51,51,1);font-size: 18px;padding: 10px 0px;margin-top: 6px">
						<div class="col-4">
							<span style="color: white">Username</span>
						</div>
						<div class="col-8">
							<center><input name="username" readonly type="text" value="<?= $username; ?>" style="background-color: transparent;border: none;color: white;font-style: italic"></center>
						</div>
					</div>
					<div class="row" style="background-color: rgba(51,51,51,1);font-size: 18px;padding: 10px 0px;margin-top: 6px">
						<div class="col-4">
							<span style="color: white">Phone Number</span>
						</div>
						<div class="col-8" style="">
							<center><input onKeyPress="isInputNumber(event)" required name="phoneNumber" type="text" value="<?php if($no_telp ==null){
																		echo "-";
																	}else{
																		echo $no_telp;
																	}?>" 
										   style="background-color: transparent;border: none;color: white;"></center>
						</div>
					</div>
				</div>
				<div class="col-4">
					<?php
						  echo '<img name="photoProfile" id="photoProfileId" src=data:image;base64,'.$photoProfile.' alt="" width="200px" height="200" style="margin-left: 100px;border-radius: 100px;border: 4px solid white"/>';
					  ?>
					<input type="file" name="uploadImage" style="margin-left: 50px;margin-top: 10px" accept=".jpg, .png, .jpeg" multiple accept='image/*' id="uploadImageID">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px">
			<div class="col-4">
				<input type="button" onClick="toOtherPage('<?= base_url(); ?>User/MyAccount/Profile')" value="BACK" class="btn" style="width: 100px;background-color: rgba(51,51,51,0.5);color: white;font-weight: 500">
				<input type="submit" value="SAVE" class="btn" style="width: 100px;background-color: white;color: rgba(51,51,51,1);font-weight: 500;margin-left:10px">
			</div>
		</div>
	</form>
</div>
</div>
<script>
	function isInputNumber(evt){
		var ch = String.fromCharCode(evt.which);
				
		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
	}
	
	$("#uploadImageID").change(function () {
		if(this.files[0].name.match(".jp") || this.files[0].name.match(".png")){
			selectedFile = this.files[0];
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#photoProfileId').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		}
		else
		{
			alert("Sorry only jpeg images are accepted");
			document.getElementById("uploadImageID").value=""; //clear the uploaded file
		}
	});
	
	function toOtherPage($base_url){
		window.location = $base_url;
	}
</script>
<style>
	#paymentMethod:hover{
		cursor: pointer;
	}
</style>
<?php $i = 0; foreach($objItem as $item): ?>
<input type="text" value="<?= $item['product_name']; ?>" style="display: none" id="productName-<?= $i; ?>">
<input type="text" value="<?= $item['category'];?>" style="display: none" id="category-<?= $i; ?>">
<input type="text" value="<?= $item['amount'];?>" style="display: none" id="amount-<?= $i; ?>">
<?php $i = $i + 1; endforeach; ?>
<input type="text" value="<?= $price; ?>" style="display: none" id="totalprice">
<div class="container">
	<div class="row" style="margin-top: 40px;background-color: rgba(51,51,51,0.2);padding: 10px">
		<div class="col-6">
			<span style="font-size: 20px;color: white;font-weight: 600">TOTAL INVOICE</span>
		</div>
		<div class="col-6" style="text-align: right">
			<span style="font-size: 20px;color: white;font-weight: 600">Rp <?= number_format($price,0,'.','.') ?><i class="fas fa-info-circle fa-xs" style="color: rgb(240, 144, 8)"></i></span>
		</div>
	</div>
	<div class="row" style="margin-top: 20px;background-color: rgba(51,51,51,0.2);padding: 10px" id="paymentMethod" onClick="paymentMethod()">
		<div class="col-6">
			<span style="font-size: 20px;color: white;font-weight: 600">PAYMENT METHOD</span>
		</div>
		<div class="col-6" style="text-align: right">
			<span style="font-size: 18px;color: white;font-weight: 600">SELECT METHOD <i class="fas fa-chevron-circle-up fa-sm" id="icon-dropdown"></i></span></span>
		</div>
	</div>
	<div class="row" style="background-color: rgba(51,51,51,0.2);padding: 10px;" id="paymentMethodMenu" data-tags="show">
		<div class="container" id="mandiri">
			<div class="row">
				<div class="col-6">
					<span style="font-size: 16px;color: white;">Payment Recommendation</span>
				</div>
			</div>
			<div class="row" style="margin-top: 20px">
				<div class="col-6">
					<img src="<?= base_url();?>Assets/template/front/img/mandiri.jpg" alt="" width="80" height="40">
					<span style="color: white;margin-left: 10px;font-weight: 500">Mandiri Virtual Account</span>
				</div>
				<div class="col-6"style="padding: 0px" >
					<div class="container" style="padding: 0px">
						<div class="row">
							<div class="col-12" style="padding: 0px">
								<div style="color: white;margin-left: 10px;font-weight: 500">Virtual Account Number :</div>
								<div style="color: white;margin-left: 10px;font-weight: 600;font-size: 24px"><span id="virtualAcc"></span></div>
								<div style="margin-left: 10px;color: #0d0;font-size: 12px;font-weight: 500">checked in 10 minutes after payment is successful</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dropdown-divider" style="padding: 0px;margin-top: 20px"></div>
			<div class="row" style="padding: 10px;padding-left: 0px;color: white;margin-top: 20px">
				<div class="col-6">
					<div style="font-size: 20px">Total Payment</div>
					<div style="color: rgb(240, 144, 8);font-size: 20px">Rp <?= number_format($price,0,'.','.') ?> <i class="fas fa-chevron-circle-down fa-xs"></i></div>
				</div>
				<div class="col-6" style="padding: 0px">
					<button class="btn" style="width: 100%;background-color: white" onClick="payNow('Mandiri Virtual Account')"><b>PAY NOW</b></button>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p style="color: white">Pay for the order to the Virtual Account above before making an order again with the Virtual Account to keep the number the same. Only accept transfers from Bank Mandiri.<br>*Inter-bank transfer fees and transfer limitations may apply if you transfer from a bank other than Mandiri.</p>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;margin-bottom: 10px">
				<div class="col-12">
					<button type="button"  style="width: 100%; border: 1px white solid;color: white" class="btn"data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="static" data-keyboard="false" >Choose another payment method</button>
				</div>
			</div>
		</div>
		<div class="container" id="cod" style="display: none" >
			<div class="row" style="margin-top: 20px">
				<div class="col-6">
					<img src="<?= base_url();?>Assets/template/front/img/cod.png" alt="" width="80" height="40">
					<span style="color: white;margin-left: 10px;font-weight: 500">Cash on Delivery</span>
				</div>
			</div>
			<div class="dropdown-divider" style="padding: 0px;margin-top: 20px"></div>
			<div class="row" style="padding: 10px;padding-left: 0px;color: white;margin-top: 20px">
				<div class="col-6">
					<div style="font-size: 20px">Total Payment</div>
					<div style="color: rgb(240, 144, 8);font-size: 20px">Rp <?= number_format($price,0,'.','.') ?> <i class="fas fa-chevron-circle-down fa-xs"></i></div>
				</div>
				<div class="col-6" style="padding: 0px">
					<button class="btn" style="width: 100%;background-color: white" onClick="payNow('Cash on Delivery')"><b>PROCESS NOW</b></button>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;margin-bottom: 10px">
				<div class="col-12">
					<button type="button"  style="width: 100%; border: 1px white solid;color: white" class="btn"data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="static" data-keyboard="false" >Choose another payment method</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Choose payment method</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			  <div class="container" style="padding: 0px">
				  <div class="row">
					  <div class="col-2" style="padding: 0px;">
						  <img class="btn" src="<?= base_url();?>Assets/template/front/img/cod.png" alt="" width="80" height="40">
					  </div>
				  	  <div class="col-8" style="padding: 0px;">
						  <button class="btn" style="width: 100%;text-align: left"  data-dismiss="modal" onClick="chooseMethod('COD')">Cash on Delivery</button>
					  </div>
					  <div class="col-2" style="padding: 0px;">
						  <button class="btn" style="width: 100%;padding: 11px"  data-dismiss="modal" onClick="chooseMethod()"><i class="fas fa-chevron-right fa-sm"></i></button>
					  </div>
				  </div>
				  <div class="dropdown-divider" style="padding: 0px;"></div>
				  <div class="row">
					  <div class="col-2" style="padding: 0px;">
						  <img class="btn" src="<?= base_url();?>Assets/template/front/img/mandiri.jpg" alt="" width="80" height="40">
					  </div>
				  	  <div class="col-8" style="padding: 0px;">
						  <button class="btn" style="width: 100%;text-align: left" data-dismiss="modal" onClick="chooseMethod('Mandiri')">Mandiri Virtual Account</button>
					  </div>
					  <div class="col-2" style="padding: 0px;">
						  <button class="btn" style="width: 100%;padding: 11px"  data-dismiss="modal" onClick="chooseMethod()"><i class="fas fa-chevron-right fa-sm"></i></button>
					  </div>
				  </div>
			  </div>
		  </div>
		</div>
	  </div>
	</div>
</div>
<script>
	function payAlert(){
			Swal.fire(
			  'Successfully',
			  'Thanks for purchasing our product!',
			  'success'
			)
		}

	function payNow(method){
		var i = <?= $i ?>;
		console.log(i);
		var listObjCart = [];
		for( var y = 0; y < i; y++){
			var objCart = {};
			objCart['productName'] = document.getElementById("productName-"+y).value;
			objCart['category'] = document.getElementById("category-"+y).value;
			objCart['amount'] = document.getElementById("amount-"+y).value;
			objCart['price'] = document.getElementById("totalprice").value;
			objCart['trans_method'] = method;
			listObjCart.push(objCart);
			var objJsonStr = btoa(JSON.stringify(listObjCart))
			window.location = "<?= base_url(); ?>User/Home/payNow?obj="+objJsonStr;
		}
		payAlert();
	}
	function showMethod(){
		document.getElementById("paymentMethodMenu").style.display = "block";
		document.getElementById("paymentMethodMenu").dataset.tags = "show"
		document.getElementById("icon-dropdown").className = "fas fa-chevron-circle-up fa-sm";
	}

	function hideMethod(){
		document.getElementById("paymentMethodMenu").style.display = "none";
		document.getElementById("paymentMethodMenu").dataset.tags = "hidden"
		document.getElementById("icon-dropdown").className = "fas fa-chevron-circle-down fa-sm";
	}
	function paymentMethod(){
		var methodMenu = document.getElementById("paymentMethodMenu").dataset.tags;
		if (methodMenu == "hidden"){
			showMethod();
		}else{
			hideMethod();
		}
	}

	var method = "Mandiri";

	function chooseMethod(metode){
		if(metode == "Mandiri"){
			document.getElementById("mandiri").style.display = "block";
			document.getElementById("cod").style.display = "none";
		}else{
			document.getElementById("mandiri").style.display = "none";
			document.getElementById("cod").style.display = "block";
		}
	}

	window.onload = function(){
		var phoneNumber = "<?= $no_telp; ?>"
		var virtualAcc = phoneNumber.replace(/(\d{4})/g, '$1 ').replace(/(^\s+|\s+$)/,'')
		document.getElementById("virtualAcc").innerHTML ="8806 "+ virtualAcc;
	}
</script>

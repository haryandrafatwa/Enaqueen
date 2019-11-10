<style>
	
	.delete-link{
		font-size: 18px;
		font-weight: 500;
		color: white
	}
	
	input[type=checkbox]
	{
		-ms-transform: scale(1.5); /* IE */
	  	-moz-transform: scale(1.5); /* FF */
	  	-webkit-transform: scale(1.5); /* Safari and Chrome */
	  	-o-transform: scale(1.5); /* Opera */
	  	transform: scale(1.5);
	  	padding: 10px;
		outline: 0px!important
	}
	
	input[type=checkbox]:hover{
		cursor: pointer
	}
	
	.custom-control-label:hover{
		cursor: pointer
	}
	
	.custom-control-input:hover{
		cursor: pointer
	}
	
</style>
<div class="container" style="margin-top: 60px">
	<div class="row">
		<div class="col-8">
			<div class="container">
				<div class="row">
					<div class="col-9">
						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="selectAll" checked>
						  <label class="custom-control-label" for="selectAll" style="color: white;transform: scale(1.5);margin-left: 44px">Select All Items</label>
						</div>
					</div>
					<div class="col-3" style="text-align: right">
						<a href="" class="delete-link">Delete</a>
					</div>
				</div>
				<div style="border: 3px solid rgba(0,0,0,0.15);margin-top: 20px"></div>
				<?php $i = 0; $totalprice = 0;foreach ($cart as $cart): ?>
				<div>
					<div class="row">
						<div class="col-12" style="margin-top: 20px">
							<div class="container" style="padding: 0px;width: 100%">
								<div class="input-group-text row " style="background-color: transparent;border: none;padding: 0px;width: 100%">
									<div class="col-1 custom-control custom-checkbox">
										<input type="checkbox" aria-label="Checkbox for following text input" class="form-control custom-control-input" id="checkbox-<?= $i ?>" onClick="checklist()">
										<label class="custom-control-label" for="checkbox-<?= $i ?>" style="transform: scale(1.5);margin-left: 30px" ></label>
									</div>
									<div class="col-4" style="">
										<?php
											if ($cart->food_name != null){
												echo '<img src="data:image/;base64,'.$cart->food_photo.'" class="nav-link language" alt="" width="120" height="120" style = "border-radius:50%;padding:0px"/>';
											}else if ($cart->drink_name != null){
												echo '<img src="data:image/;base64,'.$cart->drink_photo.'" class="nav-link language" alt="" width="120" height="120" style = "border-radius:50%;padding:0px"/>';
											}else if ($cart->dessert_name != null){
												echo '<img src="data:image/;base64,'.$cart->dessert_photo.'" class="nav-link language" alt="" width="120" height="120" style = "border-radius:50%;padding:0px"/>';
											}
										?>
									</div>
									<div class="col-4" style="">
										<div class="row">
											<span style="font-size: 24px;color: white;font-weight: 600"><?php echo $cart->food_name;echo $cart->drink_name; echo $cart->dessert_name;?></span>
										</div>
										<div class="row">
											<span style="font-size: 24px;color: white;font-weight: 600">IDR <?php 
												if($cart->food_name != null){
													$price = $cart->food_price*$cart->amount;
													echo number_format($price,0,'.','.');
												}else if ($cart->drink_name != null){
													$price = $cart->drink_price*$cart->amount;
													echo number_format($price,0,'.','.');
												}else if ($cart->dessert_name != null){
													$price = $cart->dessert_price*$cart->amount;
													echo number_format($price,0,'.','.');
												}?></span>
											<input type="number" id="input-price-<?= $i ?>" value="<?php 
												if($cart->food_name != null){
													$price = $cart->food_price;
													echo $price;
												}else if ($cart->drink_name != null){
													$price = $cart->drink_price;
													echo $price;
												}else if ($cart->dessert_name != null){
													$price = $cart->dessert_price;
													echo $price;
												}?>" style="display: none">
										</div>
									</div>
									<div class="col-3">
										<div class="row">
											<button class="" style="border: none;background-color: rgba(0,0,0,0.1);width: 30px;height: 30px;border-radius: 50%;color: white;font-weight: bolder" onClick="minAmount(<?= $i; ?>,<?= $price; ?>)">-</button>
											<input onKeyPress="isInputNumber(event)" onChange="inputAmount(<?= $i ?>,this.value,<?= $price; ?>)" type="text" style="width: 40px;background-color: transparent;border: none;border-bottom: 1px solid rgba(0,0,0,0.3);color: white;text-align: center" value="<?= $cart->amount;?>" id="input-amount-<?= $i ?>">
											<button style="border: none;background-color: white;width: 30px;height: 30px;border-radius: 50%;color: #808080;font-weight: bolder" onClick="plusAmount(<?= $i ?>,<?= $price ?>)">+</button>
											<button onClick="deleteAlert('<?= $username; ?>','<?php echo $cart->food_name?>','<?php echo $cart->drink_name?>','<?php echo $cart->dessert_name?>');" class="fas fa-trash-alt" style="background-color: white;border: none;color: #808080;margin-left: 20px;border-radius: 50%"></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $i++;$totalprice = $totalprice + $price; endforeach; ?>
			</div>
		</div>
		<div class="col-4" style="background-color: rgba(0,0,0,0.15);border-radius: 10px;height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12" style="margin-top: 20px;font-weight: 600;font-size: 18px;color: white;padding: 0px">
						<span>Shopping Summary</span>
					</div>
					<div style="border: 1px solid white;margin-top: 20px;width: 100%;"></div>
					<div class="container" style="padding: 0px;width: 100%;margin: 0px">
						<div class="row" style="width: 100%;margin: 0px;margin-top: 20px">
							<div class="col-6" style="width: 100%;padding: 0px;margin: 0px">
								<span style="color: white">Total Price</span>
							</div>
							<div class="col-6" style="text-align: right;padding: 0px;margin: 0px">
								<input type="number" style="display: none" id="totPrice" value="<?= $totalprice ?>">
								<span style="color: white;font-weight: 600" id="spanPrice">IDR <?= number_format($totalprice,0,'.','.');?></span>
							</div>
						</div>
					</div>
					<div class="col-12" style="padding: 0px;margin-top: 20px;margin-bottom: 20px">
						<button style="width: 100%;font-size: 18px;padding: 6px;background-color: white;border: none;border-radius: 10px" id="btn-buy"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	
	function isInputNumber(evt){
		var ch = String.fromCharCode(evt.which);
				
		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
	}
	
		function checklist(){
			var i = <?= $i ?>;
			window.value = 0;
			for( var y = 0; y < i; y++){
				if($('#checkbox-'+y).prop("checked") == true){
					window.value = window.value + 1;
				}else{
					document.getElementById("selectAll").checked = false;
				}
			}
			if (i == window.value){
				document.getElementById("btn-buy").innerHTML = "Buy("+i+")";
				document.getElementById("selectAll").checked = true;
			}else if (window.value == 0){
				document.getElementById("btn-buy").innerHTML = "Buy";
			}else{
				document.getElementById("btn-buy").innerHTML = "Buy("+window.value+")";
			}
			
		}
	
	    $(document).ready(function(){
			$('#selectAll').click(function(){
				var i = <?= $i ?>;
				if($(this).prop("checked") == true){
					for( var y = 0; y < i; y++){
						document.getElementById("checkbox-"+y).checked = true;
					}
					document.getElementById("btn-buy").innerHTML = "Buy("+i+")";
				}
				else{
					for( var j = 0; j < i; j++){
						document.getElementById("checkbox-"+j).checked = false;
					}
					document.getElementById("btn-buy").innerHTML = "Buy";
				}
			});
			
			
		});
	
	window.onload = function(){
		var i = <?= $i ?>;
		if($('#selectAll').prop("checked") == true){
			for( var y = 0; y < i; y++){
				document.getElementById("checkbox-"+y).checked = true;
			}
			document.getElementById("btn-buy").innerHTML = "Buy("+i+")";
		}
	}
	
	
	function inputAmount(i,amount, price){
		const formatter = new Intl.NumberFormat('id-ID', {
		  style: 'currency',
		  currency: 'IDR',
		  minimumFractionDigits: 0
		});
		if(amount < 1){
			document.getElementById("input-amount-"+i).value = 1; 
			var k = <?= $i ?>;
			var newPrice = 0;
			var newAmount = 0;
			var newTotPrice = 0;
			var zz = 0;
			for( var y = 0; y < k; y++){
				zz = document.getElementById("input-price-"+y).value;
				newAmount = parseInt(document.getElementById("input-amount-"+y).value);
				newPrice = newAmount *parseInt(zz);
				newTotPrice = newTotPrice + newPrice;
			}
			document.getElementById("spanPrice").innerHTML = formatter.format(newTotPrice); 
			document.getElementById("totPrice").value = newTotPrice; 
		}else{
			var newPrice = amount*price;
			var totPrice = document.getElementById("totPrice").value;
			totPrice = parseInt(totPrice) + parseInt(newPrice) - price;
			document.getElementById("spanPrice").innerHTML = formatter.format(totPrice); 
			document.getElementById("totPrice").value = totPrice; 
		}
	}
	
	function plusAmount(i,price){
		const formatter = new Intl.NumberFormat('id-ID', {
		  style: 'currency',
		  currency: 'IDR',
		  minimumFractionDigits: 0
		});
		console.log(document.getElementById("input-amount-"+i).value);
		var value = parseInt(document.getElementById("input-amount-"+i).value);
		var result = value + 1;
		document.getElementById("input-amount-"+i).value = result;
		var totPrice = document.getElementById("totPrice").value;
		totPrice = parseInt(totPrice) + parseInt(price);
		document.getElementById("spanPrice").innerHTML = formatter.format(totPrice); 
		document.getElementById("totPrice").value = totPrice; 
	}
	
	function minAmount(i,price){
		const formatter = new Intl.NumberFormat('id-ID', {
		  style: 'currency',
		  currency: 'IDR',
		  minimumFractionDigits: 0
		});
		console.log(document.getElementById("input-amount-"+i).value);
		var value = document.getElementById("input-amount-"+i).value;
		if (value != 1){
			document.getElementById("input-amount-"+i).value = value-1;
			var totPrice = document.getElementById("totPrice").value;
			totPrice = parseInt(totPrice) - parseInt(price);
			document.getElementById("spanPrice").innerHTML = formatter.format(totPrice); 
			document.getElementById("totPrice").value = totPrice; 
		}
	}
</script>
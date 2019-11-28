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
<div class="container" style="margin-top: 60px;height: 100%">
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
<!--
					<div class="col-3" style="text-align: right">
						<a href="" class="delete-link">Delete</a>
					</div>
-->
				</div>
				<div style="border: 3px solid rgba(0,0,0,0.15);margin-top: 20px"></div>
				<?php $i = 0; $totalprice = 0; $prices;foreach ($cart as $cart): ?>
				<div>
					<div class="row">
						<div class="col-12" style="margin-top: 20px">
							<div class="container" style="padding: 0px;width: 100%">
								<div class="input-group-text row " style="background-color: transparent;border: none;padding: 0px;width: 100%">
									<div class="col-1 custom-control custom-checkbox">
										<input type="checkbox" aria-label="Checkbox for following text input" class="form-control custom-control-input" id="checkbox-<?= $i ?>" onClick="checklist()" data-tags="<?php echo $cart->food_name;echo $cart->drink_name; echo $cart->dessert_name;?>">
										<label class="custom-control-label" for="checkbox-<?= $i ?>" style="transform: scale(1.5);margin-left: 30px" ></label>
									</div>
									<div class="col-4" style="">
										<?php
											if ($cart->food_name != null){
												echo '<img src="data:image/;base64,'.$cart->food_photo.'" class="nav-link language" alt="" width="120" height="120" style = "border-radius:50%;padding:0px" id="photoImage-'.$i.'" data-tags="food"/>';
											}else if ($cart->drink_name != null){
												echo '<img src="data:image/;base64,'.$cart->drink_photo.'" class="nav-link language" alt="" width="120" height="120" style = "border-radius:50%;padding:0px" id="photoImage-'.$i.'" data-tags="drink"/>';
											}else if ($cart->dessert_name != null){
												echo '<img src="data:image/;base64,'.$cart->dessert_photo.'" class="nav-link language" alt="" width="120" height="120" style = "border-radius:50%;padding:0px" id="photoImage-'.$i.'" data-tags="dessert"/>';
											}
										?>
									</div>
									<div class="col-4" style="">
										<div class="row">
											<span style="font-size: 24px;color: white;font-weight: 600"><?php echo $cart->food_name;echo $cart->drink_name; echo $cart->dessert_name;?></span>
										</div>
										<div class="row">
											<span style="font-size: 24px;color: white;font-weight: 600">Rp <?php 
												if($cart->food_name != null){
													$price =  $cart->food_price;
													echo number_format($price,0,'.','.');
												}else if ($cart->drink_name != null){
													$price = $cart->drink_price;
													echo number_format($price,0,'.','.');
												}else if ($cart->dessert_name != null){
													$price = $cart->dessert_price;
													echo number_format($price,0,'.','.');
												}?></span>
											<input type="number" id="price-<?= $i ?>" value="<?php 
												if($cart->food_name != null){
													$prices = $cart->food_price*$cart->amount;
													echo $prices;
												}else if ($cart->drink_name != null){
													$prices = $cart->drink_price*$cart->amount;
													echo $prices;
												}else if ($cart->dessert_name != null){
													$prices = $cart->dessert_price*$cart->amount;
													echo $prices;
												}?>" style="display: block">
											<input type="number" id="input-price-<?= $i ?>" value="<?php 
												if($cart->food_name != null){
													$prices = $cart->food_price*$cart->amount;
													echo $cart->food_price;
												}else if ($cart->drink_name != null){
													$prices = $cart->drink_price*$cart->amount;
													echo $cart->drink_price;
												}else if ($cart->dessert_name != null){
													$prices = $cart->dessert_price*$cart->amount;
													echo $cart->dessert_price;
												}?>" style="display: block">
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
				<?php $i++;$totalprice = $totalprice + $prices; endforeach; ?>
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
								<span style="color: white;font-weight: 600" id="spanPrice">Rp <?= number_format($totalprice,0,'.','.');?></span>
								<span style="color: white;font-weight: 600;display: none" id="spanPriceNull">-</span>
							</div>
						</div>
					</div>
					<div class="col-12" style="padding: 0px;margin-top: 20px;margin-bottom: 20px">
						<button style="width: 100%;font-size: 18px;padding: 6px;background-color: #0d0;border: none;border-radius: 10px" id="btn-buy" onClick="onBuy()"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
<script src='https://javascriptbase64.googlecode.com/files/base64.js' type='text/javascript'></script>
<script>
		
	function buyAlert(){
		Swal.fire(
		  'Warning!',
		  'Please select an item, at least one!',
		  'warning'
		)
	}
	
	function onBuy(){
		var i = <?= $i ?>;
		window.value = 0;
		var listObjCart = [];
		for( var y = 0; y < i; y++){
			var objCart = {};
			if($('#checkbox-'+y).prop("checked") == true){
				window.value = window.value + 1;
				objCart['productName'] = document.getElementById("checkbox-"+y).dataset.tags;
				objCart['amount'] = (document.getElementById("input-amount-"+y).value);
				objCart['price'] = (document.getElementById("price-"+y).value);
				objCart['category'] = document.getElementById("photoImage-"+y).dataset.tags;
				listObjCart.push(objCart);
			}
		}
		
		if(listObjCart.length != 0){
			var objJsonStr = btoa(JSON.stringify(listObjCart))
			//var objJsonStr = JSON.stringify(listObjCart)
			window.location = "<?= base_url(); ?>User/Home/Checkout?obj="+objJsonStr;
		}else{
			buyAlert();
		}
		
	}
	
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
				document.getElementById("spanPriceNull").style.display = "none";
				document.getElementById("spanPrice").style.display = "block";
			}else if (window.value == 0){
				document.getElementById("btn-buy").innerHTML = "Buy";
				document.getElementById("btn-buy").style.backgroundColor = "#808080";
				document.getElementById("btn-buy").style.color = "white";
				document.getElementById("spanPriceNull").style.display = "block";
				document.getElementById("spanPrice").style.display = "none";
			}else{
				document.getElementById("btn-buy").innerHTML = "Buy("+window.value+")";
				document.getElementById("btn-buy").style.backgroundColor = "#0d0";
				document.getElementById("btn-buy").style.color = "black";
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
					document.getElementById("btn-buy").style.backgroundColor = "#0d0";
					document.getElementById("btn-buy").style.color = "black";
					document.getElementById("spanPriceNull").style.display = "none";
					document.getElementById("spanPrice").style.display = "block";
				}
				else{
					for( var j = 0; j < i; j++){
						document.getElementById("checkbox-"+j).checked = false;
					}
					document.getElementById("btn-buy").innerHTML = "Buy";
					document.getElementById("btn-buy").style.backgroundColor = "#808080";
					document.getElementById("btn-buy").style.color = "white";
					document.getElementById("spanPriceNull").style.display = "block";
					document.getElementById("spanPrice").style.display = "none";
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
		
		var k = <?= $i ?>;
		if(amount < 1){
			document.getElementById("input-amount-"+i).value = 1; 
			var totalPrice = 0;
			for (var x = 0; x < k; x++){
				var newAmount = 0;
				var newPrice = 0;
				newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
				newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
				totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
			}
		}else{
			var totalPrice = 0;
			for (var x = 0; x < k; x++){
				var newAmount = 0;
				var newPrice = 0;
				newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
				newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
				totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
			}
		}
		document.getElementById("price-"+i).value = totalPrice; 
		document.getElementById("spanPrice").innerHTML = formatter.format(totalPrice);
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
		
		var k = <?= $i ?>;
		
		var totalPrice = 0;
		for (var x = 0; x < k; x++){
			var newAmount = 0;
			var prices;
			var newPrice = 0;
			newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
			newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
			totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
			prices = price * result;
		}
		document.getElementById("price-"+i).value = prices; 
		document.getElementById("spanPrice").innerHTML = formatter.format(totalPrice);
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
			var result = value - 1;
			document.getElementById("input-amount-"+i).value = result;
			var prices = result * price;
			
			var k = <?= $i ?>;
		
			var totalPrice = 0;
			for (var x = 0; x < k; x++){
				var newAmount = 0;
				var newPrice = 0;
				newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
				newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
				totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
			}
			document.getElementById("price-"+i).value = prices; 
			document.getElementById("spanPrice").innerHTML = formatter.format(totalPrice);
		}
	}
</script>
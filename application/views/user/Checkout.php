    <div>
		<p style="font-size: 36px;color: rgb(255,255,255);text-align: center;padding : 70px 0;">CHECKOUT</p>
    <div class="container" style="margin-top: -50px;color: rgb(89,141,193);">
        <p style="font-size: 32px;padding-top: 4px;color: white"><i class="fas fa-map-marked-alt mr-2"></i>LOCATION ADDRESS</p>
        <div class="row">
            <div class="col-sm-4">
				<strong style="color: rgb(3,3,3);text-transform: uppercase;color: white"><?= $username; ?></strong>
                <p style="color: white;margin-top: 30px" id="phoneNumber"><?= $no_telp; ?></p>
            </div>
            <div class="col-sm-4">
                <p style="color: white;float:center;" id="address"><?= $address['street']; ?>, <?= $address['building']; ?>, <?= $address['city']; ?>, <?= $address['state']; ?>, 
				<?= $address['zip']; ?></p>
            </div>
            <div class="col-sm-4"><button class="btn btn-primary" type="button" style="float:right;background-color : red;border-color:red;display: none" id="btn-change">Change</button></div>
        </div>
    </div>
    <div class="container" style="margin-top:30px;color: white;">
        <div class="row">
			<div class="col-sm-4" style="float:right;">
            </div>
            <div class="col-sm-4 ml-auto" style="float:right;">
                <strong><p style="text-align: center;">AMOUNT</p></strong>
            </div>
            <div class="col-sm-3" >
                <strong><p style="text-align: center;">SUB TOTAL</p></strong>
            </div>
        </div>
    </div>
    <div class="container" style="color: white">
		<?php $totalprice = 0; $i = 0; foreach ($objItem as $data): ?>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-4" style="">
				<div class="container" style="padding: 0px">
					<div class="row" style="">
						<div class="col-4" style="">
							<?php
								  echo '<img src="data:image/png;base64,'.$data['photo'].'" width="200" height="200"  alt="" style="border-radius:10px;"/>';
							  ?>
						</div>
						<div class="col-8" style="position: relative">
							<div style="position: relative;top: 50%;left: 100%;transform: translate(-50%,-50%)">
								<div style="font-size: 30px;font-weight: 500" id="productName-<?= $i; ?>" data-tags="<?= $data['category']; ?>"><?= $data[$data['category'].'_name']; ?></div>
								<div style="font-size: 24px;font-weight: bolder">Rp <?= number_format($data['price'],0,'.','.'); ?></div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="col-4  ml-auto" style="float:right;">
				<div style="text-align: center;font-size: 30px;font-weight: 500;margin-top: 80px" id="amount-<?= $i; ?>"><?= $data['amount']; ?></div>
			</div>
            <div class="col-3" style="float:right;">
				<div style="text-align: center;font-size: 30px;font-weight: 500;margin-top: 80px">Rp <?= number_format($data['pricess'],0,'.','.'); ?></div>
			</div>
        </div>
			
		<?php $totalprice = $totalprice + $data['pricess']; $i = $i + 1;endforeach; ?>
    </div>
    <div class="container" style="color: white;margin-top: 30px;">
        <div class="row">
            <div class="col-sm-12" style="padding-top:10px;background-color: rgba(51,51,51,0.15);border-radius: 10px 10px 0px 0px"><strong style="color:white;font-size: 30px;">TO BE PAID</strong></div>
        </div>
    </div>
    <div class="container" style="background-color: rgba(51,51,51,0.15)">
        <div class="row" style="margin-left: 200px">
            <div class="col-sm-9">
                <p style="font-size: 20px;color:white;float: right;margin-top: 20px;">Sub Total For Product :</p>
            </div>
            <div class="col-sm-3">
                <p style="font-size: 20px;color: white;margin-top: 20px;">Rp <?= number_format($totalprice,0,'.','.'); ?></p>
            </div>
            <div class="col-sm-9">
                <p style="font-size: 20px;color:white;float: right;margin-top: 20px;">Shipping Cost :</p>
            </div>
            <div class="col-sm-3">
                <p style="font-size: 20px;color:white;margin-top: 20px;">
				<?php
					if($totalprice < 100000){
						echo "Rp 10.000";
					}else{
						echo "-";
					}
				?>
				</p>
            </div>
            <div class="col-sm-9">
                <p style="font-size: 20px;color:white;float: right;margin-top: 20px;">Total Payment :</p>
            </div>
            <div class="col-sm-3">
                <p style="font-size: 24px;color: white;margin-top: 20px;font-weight:bold;">
				<?php
					if($totalprice < 100000){
						echo "Rp ".number_format($totalprice+10000,0,'.','.');
					}else{
						echo "Rp ".number_format($totalprice,0,'.','.');
					}
				?>
				</p>
				<input type="number" value="<?php if($totalprice < 100000){
						echo $totalprice+10000;
					}else{
						echo $totalprice;
					} ?>" style="display: none" id="totalPrice">
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #ffffff;color: rgb(89,141,193);padding: 0px;border-radius: 0px 0px 10px 10px">
        <div class="row">
            <div class="col-sm-12">
				<button onClick="onMakeAnOrder()" class="btn btn-primary" type="button" style="background-color: white;color: rgb(0,0,0);border: none;border-radius: 10px;width: 100%;padding: 20px;font-size: 20px;font-weight: 500">MAKE AN ORDER</button>
			</div>
        </div>
    </div>
		
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script>
		function orderAlert(){
			Swal.fire(
			  'Warning!',
			  'Please fill in your phone number and your address first!',
			  'warning'
			)
		}
		
		function onMakeAnOrder(){
			var phoneNumber = document.getElementById("phoneNumber").innerHTML;
			var address = document.getElementById("address").innerHTML;
			if(phoneNumber == "-" || phoneNumber == "" || address == "-" || address == ""){ 
				orderAlert();
			}else{
				var i = <?= $i ?>;
				console.log(i);
				var listObjCart = [];
				for( var y = 0; y < i; y++){
					var objCart = {};
					objCart['productName'] = document.getElementById("productName-"+y).innerHTML;
					objCart['amount'] = (document.getElementById("amount-"+y).innerHTML);
					objCart['category'] = document.getElementById("productName-"+y).dataset.tags;
					objCart['price'] = document.getElementById("totalPrice").value;
					listObjCart.push(objCart);
				}

				if(listObjCart.length != 0){
					var objJsonStr = btoa(JSON.stringify(listObjCart))
					window.location = "<?= base_url(); ?>User/Home/Payment?obj="+objJsonStr;
				}else{
					buyAlert();
				}
			}
		}
		
		window.onload = function(){
			var phoneNumber = document.getElementById("phoneNumber").innerHTML;
			var address = document.getElementById("address").innerHTML;
			if(phoneNumber == "-" || phoneNumber == "" || address == "-" || address == ""){ 
				document.getElementById("btn-change").style.display = "block";
				document.getElementById("btn-change").style.backgroundColor = "Red";
			}else{
				document.getElementById("btn-change").style.display = "block";
				document.getElementById("btn-change").style.backgroundColor = "#0d0";
				document.getElementById("btn-change").style.border = "none";
				document.getElementById("btn-change").style.color = "black";
			}
		}
	</script>
    <div>
		<p style="font-size: 36px;color: rgb(255,255,255);text-align: center;padding : 70px 0;">CHECKOUT</p>
    <div class="container" style="margin-top: -50px;color: rgb(89,141,193);">
        <p style="font-size: 32px;padding-top: 4px;color: white"><i class="fas fa-map-marked-alt mr-2"></i>LOCATION ADDRESS</p>
        <div class="row">
            <div class="col-sm-4"><strong style="color: rgb(3,3,3);text-transform: uppercase;color: white"><?= $username; ?></strong>
                <p style="color: white" id="phoneNumber"><?= $no_telp; ?></p>
            </div>
            <div class="col-sm-4">
                <p style="color: white;float:center;"><?= $alamat; ?></p>
            </div>
            <div class="col-sm-4"><button class="btn btn-primary" type="button" style="float:right;background-color : red;border-color:red;">change</button></div>
        </div>
    </div>
    <div class="container" style="margin-top:30px;color: white;">
        <div class="row">
			<div class="col-sm-4" style="float:right;">
            </div>
            <div class="col-sm-4" style="float:right;">
                <strong><p style="text-align: center;">AMOUNT</p></strong>
            </div>
            <div class="col-sm-3">
                <strong><p style="text-align: center;">SUB TOTAL</p></strong>
            </div>
        </div>
    </div>
    <div class="container" style="color: white">
        <div class="row">
            <div class="col-sm-4"><img src="<?= base_url();?>assets/images/image%2016.png" style="width : 35%;float:left;">
                <div>
                    <p style="color: rgb(0,0,0);text-align: center;font-size: 11px;margin:30px 0; font-weight:bold;">BERGSBO<br></p>
                </div>
                <div>
                    <p style="color: rgb(0,0,0);text-align: center;font-size: 11px;margin-top:-30px;">Pintu dengan engsel, high-gloss putih<br></p>
                </div>
                <div>
                    <p style="color: rgb(0,0,0);text-align: center;font-size: 30px;margin-top:-25px;">Rp 1.400.000<br></p>
                </div>
            </div>
            <div class="col-sm-4">
                <p style="font-size: 28px;font-family: Roboto, sans-serif;color: rgb(0,0,0);text-align: center;margin-top:40px;">2</p>
            </div>
            <div class="col-sm-3">
                <p style="font-size: 28px;font-family: Roboto, sans-serif;color: rgb(0,0,0);float:right;margin-top:40px;">Rp 2.800.00,00</p>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #ffffff;color: rgb(89,141,193);margin-top: 30px;">
        <div class="row">
            <div class="col-sm-4" style="padding-top:10px;"><strong style="color: rgb(3,3,3);font-size: 31px;">TO BE PAID</strong></div>
        </div>
    </div>
    <div class="container" style="background-color: #ffffff;">
        <div class="row">
            <div class="col-sm-10">
                <p style="font-size: 16px;font-family: Roboto, sans-serif;color: rgb(0,0,0);float: right;margin-top: 40px;">Sub Total For Product :</p>
            </div>
            <div class="col-sm-2">
                <p style="font-size: 16px;font-family: Roboto, sans-serif;color: rgb(0,0,0);float: right;margin-top: 40px;">Rp 4.200.00,00</p>
            </div>
            <div class="col-sm-10">
                <p style="font-size: 16px;font-family: Roboto, sans-serif;color: rgb(0,0,0);float: right;margin-top: 40px;">Shipping Cost :</p>
            </div>
            <div class="col-sm-2">
                <p style="font-size: 16px;font-family: Roboto, sans-serif;color: rgb(0,0,0);float: right;margin-top: 40px;">Rp 22.000,00</p>
            </div>
            <div class="col-sm-10">
                <p style="font-size: 16px;font-family: Roboto, sans-serif;color: rgb(0,0,0);float: right;margin-top: 40px;">Total Payment :</p>
            </div>
            <div class="col-sm-2">
                <p style="font-size: 21px;font-family: Roboto, sans-serif;color: rgb(0,0,0);float: right;margin-top: 40px;font-weight:bold;">Rp 4.222.000,00</p>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #ffffff;color: rgb(89,141,193);">
        <div class="row">
            <div class="col-sm-12"><button class="btn btn-primary" type="button" style="background-color: white;color: rgb(0,0,0);border-color: black;border-radius: 0px;float: right;margin-top: 10px;font-family: Saira, sans-serif;margin-bottom:10px;">MAKE AN ORDER</button></div>
        </div>
    </div>
		
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script>
		window.onload = function(){
			var obj = "<?= $obj; ?>";
			console.log(atob(obj));
		}
	</script>
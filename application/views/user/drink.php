<style media="screen">
  section{
    position: relative;
		justify-content: center;
		align-items: center;
		background-color: #4d4d4d;
		background-size: cover;
		background-attachment: fixed;
		min-height: 100%;
  }

	.add-product:hover{
		text-decoration: none;
		background-color: white;
		color: rgba(51,51,51,0.9)!important;
	}
</style>
<?php if ($this->session->flashdata('gagal')) : ?>
	<div class="container" style="margin-top:40px">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <?= $this->session->flashdata('gagal'); ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <center><h1 style="color:white;font-weight:bold;margin-top:60px">DRINK</h1></center>
    </div>
  </div>
  <div id="add-product" class="row" style="margin-top: 40px;display: none">
    <div class="col-12" style="text-align: right">
      <a id="add-product-link" class="add-product" href="" style="border: 3px solid white;padding: 10px;border-radius: 20px;color: white;"><i class="fas fa-plus"></i> Add Product</a>
    </div>
  </div>
  <div class="row" style="margin-top: 40px">

	<!-- INI TEA	-->
    <div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Tea</h1></center>
          </div>
        </div>
		    <?php $i = 0; foreach ($productTea as $tea): ?>
			<div class="row">
			  <div class="col-7">
				  <?php
					  echo '<img src="data:image/png;base64,'.$tea->photo.'" width="180" height="130"  alt="" style="margin-left:20px;margin-bottom:20px;border-radius:10px"/>';
				  ?>
			  </div>
			  <div class="col-5">
				<div class="" style="display: table;position: relative;top: 0;left: 0;height: 100%;width: 100%;">
				  <div class="" style="display:table-cell;vertical-align:middle">
					<div class="" style="margin-left:auto;margin-right:auto">
					  <div class="">
						<center><span style="color:white"><?= $tea->drink_name; ?></span></center>
					  </div>
					  <div class="">
						<center><span style="color:white" id="price">Rp
							<?php
								echo number_format($tea->price,0,'.','.');
							?>
            				</span>
						</center>
					  </div>
					  <div class="">
						<center><span style="color:white">Stock: <?= $tea->stock; ?></span></center>
					  </div>
					  <div class="btnDiv">
						<center><button onClick="clicked('<?= $tea->drink_name; ?>')" id="btn-add-tea-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
						  <center><button onClick="clicked('<?= $tea->drink_name; ?>')" id="btn-edit-tea-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px;display: none">Edit Product</button></center>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php $i++; endforeach; ?>
      </div>
    </div>

	<!-- INI COFFEE	-->
	<div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Coffee</h1></center>
          </div>
        </div>
		<?php $i = 0; foreach ($productCof as $coffee):?>
			<div class="row">
			  <div class="col-7">
				  <?php
					  echo '<img src="data:image/png;base64,'.$coffee->photo.'" width="180" height="130"  alt="" style="margin-left:20px;margin-bottom:20px;border-radius:10px"/>';
				  ?>

			  </div>
			  <div class="col-5">
				<div class="" style="display: table;position: relative;top: 0;left: 0;height: 100%;width: 100%;">
				  <div class="" style="display:table-cell;vertical-align:middle">
					<div class="" style="margin-left:auto;margin-right:auto">
					  <div class="">
						<center><span style="color:white"><?= $coffee->drink_name; ?></span></center>
					  </div>
					  <div class="">
						<center><span style="color:white" id="price">Rp
							<?php
								echo number_format($coffee->price,0,'.','.');
							?>
						</center>
					  </div>
					  <div class="">
						<center><span style="color:white">Stock: <?= $coffee->stock; ?></span></center>
					  </div>
					  <div class="">
						<center><button onClick="clicked('<?= $coffee->drink_name; ?>')" id="btn-add-coffee-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
						  <center><button onClick="clicked('<?= $coffee->drink_name; ?>')" id="btn-edit-coffee-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px;display: none">Edit Product</button></center>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php $i++; endforeach; ?>
      </div>
    </div>

	<!-- INI MILKSHAKE	-->
	<div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Milkshake</h1></center>
          </div>
        </div>
		<?php $i = 0; foreach ($productMil as $milkshake):?>
			<div class="row">
			  <div class="col-7">
				  <?php
					  echo '<img src="data:image/png;base64,'.$milkshake->photo.'" width="180" height="130"  alt="" style="margin-left:20px;margin-bottom:20px;border-radius:10px"/>';
				  ?>
			  </div>
			  <div class="col-5">
				<div class="" style="display: table;position: relative;top: 0;left: 0;height: 100%;width: 100%;">
				  <div class="" style="display:table-cell;vertical-align:middle">
					<div class="" style="margin-left:auto;margin-right:auto">
					  <div class="">
						<center><span style="color:white"><?= $milkshake->drink_name; ?></span></center>
					  </div>
					  <div class="">
						<center><span style="color:white" id="price">Rp
							<?php
								echo number_format($milkshake->price,0,'.','.');
							?>
						</center>
					  </div>
					  <div class="">
						<center><span style="color:white">Stock: <?= $milkshake->stock; ?></span></center>
					  </div>
					  <div class="">
						<center><button onClick="clicked('<?= $milkshake->drink_name; ?>')" id="btn-add-milkshake-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
						  <center><button onClick="clicked('<?= $milkshake->drink_name; ?>')" id="btn-edit-milkshake-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px;display: none">Edit Product</button></center>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php $i++; endforeach; ?>
      </div>
    </div>

  </div>

</div>
<script>

		var username = "<?php echo $this->session->userdata('username'); ?>";
		var i = <?= count($productTea); ?> ;
		var h = <?= count($productCof); ?> ;
		var j = <?= count($productMil); ?> ;
		console.log(i);
		if(username == 'admin'){
			document.getElementById("add-product").style.display = "block";
			document.getElementById("dataUser").style.display = "block";
			document.getElementById("dataTransaksi").style.display = "block";
			document.getElementById("navbarCart").style.display = "none";
			document.getElementById("add-product-link").href = "<?= base_url();?>Admin/ProductDrink/addDrinkProduct";

			for(var y = 0; y < i;y++){
				document.getElementById("btn-edit-tea-"+y).style.display = "block";
				document.getElementById("btn-add-tea-"+y).style.display = "none";
			}

			for(var y = 0; y < h;y++){
				document.getElementById("btn-edit-coffee-"+y).style.display = "block";
				document.getElementById("btn-add-coffee-"+y).style.display = "none";
			}

			for(var y = 0; y < j;y++){
				document.getElementById("btn-edit-milkshake-"+y).style.display = "block";
				document.getElementById("btn-add-milkshake-"+y).style.display = "none";
			}

		}else{
			document.getElementById("add-product").style.display = "none";
			document.getElementById("btn-edit").style.display = "none";
			document.getElementById("btn-add").style.display = "block";
		}

	function clicked(test){
		var username = "<?php echo $this->session->userdata('username'); ?>";
		if(username == 'admin'){
			window.location = "<?= base_url();?>Admin/ProductDrink/editDrinkProduct/"+test;
		}else if(username == ""){
			addCartAlert();
		}else{
			window.location = "<?= base_url();?>User/Home/addToCart/"+test+"/"+username+"/Drink";
		}
	}

	function addCartAlert(){
		const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
			confirmButton: 'btn btn-hijau',
			cancelButton: 'btn btn-merah'
		  },
		  buttonsStyling: true
		})

		swalWithBootstrapButtons.fire({
		  title: 'You are not logged in',
		  text: "You must be logged in to be able add an items to your cart",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Login now',
		  cancelButtonText: 'No, cancel',
		  reverseButtons: true
		}).then((result) => {
		  if(result.value){
			  window.location = "<?= base_url();?>Welcome/Login";
		  }
		});
	}
</script>

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
      <center><h1 style="color:white;font-weight:bold;margin-top:60px">DESSERT</h1></center>
    </div>
  </div>
	<div id="add-product" class="row" style="margin-top: 40px;display: none">
    <div class="col-12" style="text-align: right">
      <a id="add-product-link" class="add-product" href="" style="border: 3px solid white;padding: 10px;border-radius: 20px;color: white;"><i class="fas fa-plus"></i> Add Product</a>
    </div>
  </div>
  <div class="row" style="margin-top: 40px">
    <div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Ice Cream</h1></center>
          </div>
        </div>
        <?php $i = 0; foreach ($productIce as $icecream): ?>
        <div class="">
          <div class="row">
            <div class="col-12">
              <?php
    					  echo '<center><img src="data:image/png;base64,'.$icecream->photo.'" width="200" height="150" alt="" style="border-radius:10px"/><center>';
    				  ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12" style="margin-bottom:20px;margin-top:20px">
              <div class="">
                <center><span><?= $icecream->dessert_name; ?></span></center>
              </div>
              <div class="">
                <center><span>Rp
                  <?php
						echo number_format($icecream->price,0,'.','.');
					?>
                </span></center>
              </div>
              <div class="">
                <center><span>Stock: <?= $icecream->stock; ?></span></center>
              </div>
              <div class="">
                <center><button onClick="clicked('<?= $icecream->dessert_name; ?>')" id="btn-add-icecream-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
				  <center><button onClick="clicked('<?= $icecream->dessert_name; ?>')" id="btn-edit-icecream-<?= $i; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px;display: none">Edit Product</button></center>
              </div>
            </div>
          </div>
        </div>
        <?php $i++; endforeach; ?>
      </div>
    </div>
    <div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Cake</h1></center>
          </div>
        </div>
        <?php $h = 0; foreach ($productCak as $cake): ?>
        <div class="">
          <div class="row">
            <div class="col-12">
              <?php
    					  echo '<center><img src="data:image/png;base64,'.$cake->photo.'" width="200" height="150" alt="" style="border-radius:10px"/><center>';
    				  ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12" style="margin-bottom:20px;margin-top:20px">
              <div class="">
                <center><span><?= $cake->dessert_name; ?></span></center>
              </div>
              <div class="">
                <center><span>Rp
                  <?php
    								echo number_format($cake->price,0,'.','.');
    							?>
                </span></center>
              </div>
              <div class="">
                <center><span>Stock: <?= $cake->stock; ?></span></center>
              </div>
              <div class="">
                <center><button onClick="clicked('<?= $cake->dessert_name; ?>')" id="btn-add-cake-<?= $h; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
				  <center><button onClick="clicked('<?= $cake->dessert_name; ?>')" id="btn-edit-cake-<?= $h; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px;display: none">Edit Product</button></center>
              </div>
            </div>
          </div>
        </div>
        <?php $h++; endforeach; ?>
      </div>
    </div>
    <div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Pastry</h1></center>
          </div>
        </div>
        <?php $k = 0; foreach ($productPas as $pastry): ?>
        <div class="">
          <div class="row">
            <div class="col-12">
              <?php
    					  echo '<center><img src="data:image/png;base64,'.$pastry->photo.'" width="200" height="150" alt="" style="border-radius:10px"/><center>';
    				  ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12" style="margin-bottom:20px;margin-top:20px">
              <div class="">
                <center><span><?= $pastry->dessert_name; ?></span></center>
              </div>
              <div class="">
                <center><span>Rp
                  <?php
    								echo number_format($pastry->price,0,'.','.');
    							?>
                </span></center>
              </div>
              <div class="">
                <center><span>Stock: <?= $pastry->stock; ?></span></center>
              </div>
              <div class="">
                <center><button onClick="clicked('<?= $pastry->dessert_name; ?>')" id="btn-add-pastry-<?= $k; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
				  <center><button onClick="clicked('<?= $pastry->dessert_name; ?>')" id="btn-edit-pastry-<?= $k; ?>" type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px;display: none">Edit Product</button></center>
              </div>
            </div>
          </div>
        </div>
        <?php $k++; endforeach; ?>
      </div>
    </div>
  </div>
</div>
<script>

		var username = "<?php echo $this->session->userdata('username'); ?>";
		var i = <?= count($productIce); ?> ;
		var h = <?= count($productCak); ?> ;
		var j = <?= count($productPas); ?> ;
		console.log(i);
		if(username == 'admin'){
			document.getElementById("add-product").style.display = "block";
			document.getElementById("dataUser").style.display = "block";
			document.getElementById("dataTransaksi").style.display = "block";
			document.getElementById("navbarCart").style.display = "none";
			document.getElementById("add-product-link").href = "<?= base_url();?>Admin/ProductDessert/addDessertProduct";

			for(var y = 0; y < i;y++){
				document.getElementById("btn-edit-icecream-"+y).style.display = "block";
				document.getElementById("btn-add-icecream-"+y).style.display = "none";
			}

			for(var y = 0; y < h;y++){
				document.getElementById("btn-edit-cake-"+y).style.display = "block";
				document.getElementById("btn-add-cake-"+y).style.display = "none";
			}

			for(var y = 0; y < j;y++){
				document.getElementById("btn-edit-pastry-"+y).style.display = "block";
				document.getElementById("btn-add-pastry-"+y).style.display = "none";
			}

		}else{
			document.getElementById("add-product").style.display = "none";
			document.getElementById("btn-edit").style.display = "none";
			document.getElementById("btn-add").style.display = "block";
		}

	function clicked(test){
		var username = "<?php echo $this->session->userdata('username'); ?>";
		if(username == 'admin'){
			window.location = "<?= base_url();?>Admin/ProductDessert/editDessertProduct/"+test;
		}else if(username == ""){
			addCartAlert();
		}else{
			window.location = "<?= base_url();?>User/Home/addToCart/"+test+"/"+username+"/Dessert";
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

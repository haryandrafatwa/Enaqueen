<style>
	.overlay-layer{
		position: absolute;
		margin-top:10px;
		width: 100%;
		background-color:white;
		z-index:0;
		font-size:18px;
		color:#000000;
		text-align:center;
		width: 26.5%;
		border-radius: 5px;
		padding: 6px
	}
	.upload_btn{
		position: absolute;
		z-index:1;
		opacity:0;
		width: 26.5%
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
<div class="container" style="margin-top: 40px">
        <div class="row justify-content-center">
            <div class="col-lg-8" style="color: white">
              <h1>EDIT PRODUCT</h1>
            </div>
        </div>
  </div>

<div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
				<!--<div class="alert alert-warning" role="alert" id="alert-warn" style="display: none">
				</div>-->
                <form method="POST" class="mbr-form form-with-styler" id="addProduct" enctype="multipart/form-data" action="<?= base_url();?>Admin/ProductDessert/updateDessertProduct">
                 <div class="dragArea row">
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Product's Category</label>
                            <input type="text" name="productCategory" data-form-field="Name" required="required" class="form-control display-7" id="productCategory" readonly value="<?php echo $product['id_category']; ?>">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Product Name</label>
                            <input type="text" name="productName" data-form-field="Name" required="required" class="form-control display-7" id="productName" readonly value="<?= $product['product_name'];?>">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Price</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">IDR</span>
							  	</div>
							  	<input type="text" class="form-control display-7" aria-label="Amount (to the nearest IDR)" required="required" data-form-field="Name" name="price" id="price" onKeyPress="isInputNumber(event)" value="<?php echo number_format($product['price'],0,'.','.'); ?>">
							</div>
                        </div>
                        <div class="col-md-2  form-group" data-for="name" style="color: white;margin-top: -10px">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Stock</label>
                            <input type="text" name="stock" data-form-field="Name" required="required" class="form-control display-7" id="stock" onKeyPress="isInputNumber(event)" value="<?= $product['stock'];?>">
                        </div>
						<div data-for="message" class="col-md-12 form-group" style="color: white">
                            <label for="message-form1-53" class="form-control-label mbr-fonts-style display-7">Product Image</label>
							<?php
								  echo '<img id="photoProfile" src="data:image/png;base64,'.$product['photo'].'" class="form-control" style="height: 200px;width: 200px;padding: 0px;border:none"/>';
							  ?>
							<div class="overlay-layer">Upload photo</div>
                            <input type="file" name="uploadImage" data-form-field="Name" class="form-control upload_btn" id="uploadImage" style="border: none;color: black;padding: 0px;margin-top: 10px;padding: 0px" accept=".jpg, .png, .jpeg" multiple accept='image/*'>

                        </div>
                        <div class="col-md-12 input-group-btn" style="margin-top: 60px">
							<a href="<?= base_url();?>User/Home/Product?type=Dessert" id="btn-cancel" class="btn btn-primary btn-form-product display-4" style="margin-right: 10px;background-color: rgba(51,51,51,0.5)!important;border:#808080 solid!important;color: white!important;border-radius: 10px!important;padding: 10px">CANCEL</a>
                          	<a href="javascript:deleteAlert()" id="btn-cancel" class="btn btn-danger btn-form-product display-4" style="margin-right: 10px;border:#808080 solid!important;color: white!important;border-radius: 10px!important;padding: 10px">DELETE</a>
							<button type="submit" class="btn btn-success btn-form-product display-4" style="border-radius: 10px!important;padding: 10px">UPDATE</button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
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

	var rupiah = document.getElementById("price");
	rupiah.addEventListener("keyup", function(e) {
	  rupiah.value = formatRupiah(this.value, "IDR ");
	});

	function formatRupiah(angka, prefix) {
	  var number_string = angka.replace(/[^,\d]/g, "").toString(),
		split = number_string.split(","),
		sisa = split[0].length % 3,
		rupiah = split[0].substr(0, sisa),
		ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	  // tambahkan titik jika yang di input sudah menjadi angka ribuan
	  if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	  }

	  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	  return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
	}

	$("#uploadImage").change(function () {
		if(this.files[0].name.match(".jp") || this.files[0].name.match(".png")){
			selectedFile = this.files[0];
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#photoProfile').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		}
		else
		{
			alert("Sorry only jpeg images are accepted");
			document.getElementById("uploadImage").value=""; //clear the uploaded file
		}
	});

	function deleteAlert(){
		const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		  },
		  buttonsStyling: true
		})

		swalWithBootstrapButtons.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Yes, delete it!',
		  cancelButtonText: 'No, cancel!',
		  reverseButtons: true
		}).then((result) => {
		  if (result.value) {
			swalWithBootstrapButtons.fire(
			  'Deleted!',
			  'Your file has been deleted.',
			  'success'
			).then((result) => {
				window.location = "<?= base_url();?>Admin/ProductDessert/deleteDessertProduct/<?= $product['product_name'];?>";
			});
		  } else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		  ) {
			swalWithBootstrapButtons.fire(
			  'Cancelled',
			  'Your imaginary file is safe :)',
			  'error'
			)
		  }
		});
	}
</script>

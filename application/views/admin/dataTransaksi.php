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
	<div class="row" style="margin-top: 40px">
		<div class="col-12">
			<h1 style="color: white">Data Transaksi</h1>
		</div>
	</div>
	<div class="row" style="margin-top: 40px">
		<div class="col-12">
			<table class="table table-hover" style="color: white">
			  <thead>
				<tr>
				  <th scope="col">Transaction ID</th>
				  <th scope="col">First Name</th>
				  <th scope="col">Last Name</th>
				  <th scope="col">Product Name</th>
				  <th scope="col">Transaction Method</th>
				  <th scope="col">Date</th>
				  <th scope="col">Total Price</th>
				  <th>Delete</th>
				</tr>
			  </thead>
			  <tbody>
				<?php foreach($transaction as $transaction): ?>
				<tr>
					<th style="text-align:center"><?= $transaction->trans_id; ?></th>
					<td><?= $transaction->firstname; ?></td>
					<td><?= $transaction->lastname; ?></td>
					<td><?= $transaction->product_name; ?></td>
					<td><?= $transaction->transaction_method; ?></td>
					<td><?= $transaction->date; ?></td>
					<td><?= $transaction->total_price; ?></td>
					<td style="vertical-align: middle;text-align:center"><button style="background-color: transparent;border: none;" onClick="deleteTransaction('<?= $transaction->trans_id ?>','<?= $transaction->username; ?>')"><i style="color: red" class="fas fa-trash-alt"></i></button></td>
				</tr>
				<?php endforeach; ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<script>

	window.onload = function(){
		var username = "<?= $username; ?>";
		console.log(username)
		if(username == 'admin'){
				document.getElementById("navbarCart").style.display = "none";
				document.getElementById("dataUser").style.display = "block";
				document.getElementById("dataTransaksi").style.display = "block";
		}
	}


	function deleteTransaction(id,username){
		const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		  },
		  buttonsStyling: true
		})

		swalWithBootstrapButtons.fire({
		  title: 'Delete User',
		  text: "Are you sure want to delete this user?",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Yes, delete it',
		  cancelButtonText: 'No, cancel',
		  reverseButtons: true
		}).then((result) => {
		  if(result.value){
			  var transaction = {};
				transaction['username'] = username;
				transaction['id'] = id
				var objTrans = btoa(JSON.stringify(transaction));
			  window.location = "<?= base_url();?>User/Home/deleteTransaction?transObj="+objTrans;
		  }
		});
	}

</script>

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
<?php if ($this->session->flashdata('kosong')) : ?>
	<div class="container" style="margin-top:40px">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <?= $this->session->flashdata('kosong'); ?>
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
	<div class="row" style="margin-top: 40px;width:100%">
		<form action="<?= base_url();?>User/Home/SortingDate" method="post">
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputDate">Date</label>
		      <select id="inputDate" class="form-control" name="inputDate">
						<option selected disabled value="null">Choose Date</option>
					 	<option>01</option>
					 	<option>02</option>
					 	<option>03</option>
					 	<option>04</option>
					 	<option>05</option>
					 	<option>06</option>
					 	<option>07</option>
					 	<option>08</option>
					 	<option>09</option>
					 	<option>10</option>
					 	<option>11</option>
					 	<option>12</option>
					 	<option>13</option>
 					 	<option>14</option>
 					 	<option>15</option>
 					 	<option>16</option>
 					 	<option>17</option>
 					 	<option>18</option>
 					 	<option>19</option>
 					 	<option>20</option>
 					 	<option>21</option>
 					 	<option>22</option>
 					 	<option>23</option>
					 	<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
				 </select>
		      </select>
		    </div>
				<div class="form-group col-md-4">
		      <label for="inputMonth">Month</label>
		      <select id="inputMonth" class="form-control" name="inputMonth">
		        <option selected disabled>Choose Month</option>
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
		      </select>
		    </div>
				<div class="form-group col-md-4">
		      <label for="inputYear">Year</label>
		      <select id="inputYear" class="form-control" name="inputYear">
						<option selected disabled>Choose Year</option>
						<?php
							while($currYear >= $minYear){
								echo "<option>".$currYear."</option>";
									$currYear--;
							}
						?>
		      </select>
		    </div>
			  <button type="submit" class="btn btn-primary form-group col-md-3" style="border-radius:10px">Filter</button>
		  </div>
		</form>
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
					<td><?= $transaction->totalprice; ?></td>
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

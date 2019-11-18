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
			<h1 style="color: white">Data User</h1>
		</div>
	</div>
	<div class="row" style="margin-top: 40px">
		<div class="col-12">
			<table class="table table-hover" style="color: white">
			  <thead>
				<tr>
				  <th scope="col">Username</th>
				  <th scope="col">First Name</th>
				  <th scope="col">Last Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Phone Number</th>
				  <th scope="col">Delete</th>
				</tr>
			  </thead>
			  <tbody>
				<?php foreach($user as $user): ?>
				<tr>
					<th scope="row"><?= $user->username; ?></th>
					<td><?= $user->firstname; ?></td>
					<td><?= $user->lastname; ?></td>
					<td><?= $user->email; ?></td>
					<td><?= $user->no_telp; ?></td>
					<td style="vertical-align: middle"><button style="background-color: transparent;border: none;" onClick="deleteUser('<?= $user->username; ?>')"><i style="color: red" class="fas fa-trash-alt"></i></button></td>
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
		}
	}
	
	
	function deleteUser(username){
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
			  var user = btoa(username);
			  window.location = "<?= base_url();?>User/Home/deleteUser?user="+user;
		  }
		});
	}
	
</script>
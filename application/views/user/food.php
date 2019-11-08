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
</style>
<div class="container">
  <div class="row">
    <div class="col-12">
      <center><h1 style="color:white;font-weight:bold;margin-top:60px">FOOD</h1></center>
    </div>
  </div>
  <div class="row">

	<!-- INI JAVANESE	-->
    <div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Javanese</h1></center>
          </div>
        </div>
		    <?php foreach ($productJav as $javanese):?>
			<div class="row">
			  <div class="col-7">
				  <?php
					  echo '<img src="data:image/png;base64,'.base64_encode($javanese->photo).'" width="180" height="130"  alt="" style="margin-left:20px;margin-bottom:20px;border-radius:10px"/>';
				  ?>
			  </div>
			  <div class="col-5">
				<div class="" style="display: table;position: relative;top: 0;left: 0;height: 100%;width: 100%;">
				  <div class="" style="display:table-cell;vertical-align:middle">
					<div class="" style="margin-left:auto;margin-right:auto">
					  <div class="">
						<center><span style="color:white"><?= $javanese->food_name; ?></span></center>
					  </div>
					  <div class="">
						<center><span style="color:white" id="price">IDR
							<?php
								echo number_format($javanese->price,0,'.',',');
							?>
            </span>
						</center>
					  </div>
					  <div class="">
						<center><span style="color:white">Stock: <?= $javanese->stock; ?></span></center>
					  </div>
					  <div class="">
						<center><button type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php endforeach; ?>
      </div>
    </div>

	<!-- INI SUNDANESE	-->
	<div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Sundanese</h1></center>
          </div>
        </div>
		<?php foreach ($productSun as $sundanese):?>
			<div class="row">
			  <div class="col-7">
				  <?php
					  echo '<img src="data:image/png;base64,'.base64_encode($sundanese->photo).'" width="180" height="130"  alt="" style="margin-left:20px;margin-bottom:20px;border-radius:10px"/>';
				  ?>
			  </div>
			  <div class="col-5">
				<div class="" style="display: table;position: relative;top: 0;left: 0;height: 100%;width: 100%;">
				  <div class="" style="display:table-cell;vertical-align:middle">
					<div class="" style="margin-left:auto;margin-right:auto">
					  <div class="">
						<center><span style="color:white"><?= $sundanese->food_name; ?></span></center>
					  </div>
					  <div class="">
						<center><span style="color:white" id="price">IDR
							<?php
								echo number_format($sundanese->price,0,'.',',');
							?>
						</center>
					  </div>
					  <div class="">
						<center><span style="color:white">Stock: <?= $sundanese->stock; ?></span></center>
					  </div>
					  <div class="">
						<center><button type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php endforeach; ?>
      </div>
    </div>

	<!-- INI BALINESE	-->
	<div class="col-4">
      <div class="" style="background-color:rgba(128,128,128,0.5);border-radius: 20px">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Balinese</h1></center>
          </div>
        </div>
		<?php foreach ($productBal as $balinese):?>
			<div class="row">
			  <div class="col-7">
				  <?php
					  echo '<img src="data:image/png;base64,'.base64_encode($balinese->photo).'" width="180" height="130"  alt="" style="margin-left:20px;margin-bottom:20px;border-radius:10px"/>';
				  ?>
			  </div>
			  <div class="col-5">
				<div class="" style="display: table;position: relative;top: 0;left: 0;height: 100%;width: 100%;">
				  <div class="" style="display:table-cell;vertical-align:middle">
					<div class="" style="margin-left:auto;margin-right:auto">
					  <div class="">
						<center><span style="color:white"><?= $balinese->food_name; ?></span></center>
					  </div>
					  <div class="">
						<center><span style="color:white" id="price">IDR
							<?php
								echo number_format($balinese->price,0,'.',',');
							?>
						</center>
					  </div>
					  <div class="">
						<center><span style="color:white">Stock: <?= $balinese->stock; ?></span></center>
					  </div>
					  <div class="">
						<center><button type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		<?php endforeach; ?>
      </div>
    </div>

  </div>

</div>
	<script>
		console.log('<?= $productJav['food_name'][1]; ?>');
	</script>

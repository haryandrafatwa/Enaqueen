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
      <center><h1 style="color:white;font-weight:bold;margin-top:60px">DESSERT</h1></center>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      <div class="" style="background-color:rgba(92,102,109,0.7)">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Ice Cream</h1></center>
          </div>
        </div>
        <?php foreach ($productIce as $icecream): ?>
        <div class="">
          <div class="row">
            <div class="col-12">
              <?php
    					  echo '<center><img src="data:image/png;base64,'.base64_encode($icecream->photo).'" width="200" height="150" alt="" style="border-radius:10px"/><center>';
    				  ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12" style="margin-bottom:20px;margin-top:20px">
              <div class="">
                <center><span><?= $icecream->desert_name; ?></span></center>
              </div>
              <div class="">
                <center><span>IDR
                  <?php
    								echo number_format($icecream->price,0,'.',',');
    							?>
                </span></center>
              </div>
              <div class="">
                <center><span>Stock: <?= $icecream->stock; ?></span></center>
              </div>
              <div class="">
                <center><button type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-4">
      <div class="" style="background-color:rgba(92,102,109,0.7)">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Cake</h1></center>
          </div>
        </div>
        <?php foreach ($productCak as $cake): ?>
        <div class="">
          <div class="row">
            <div class="col-12">
              <?php
    					  echo '<center><img src="data:image/png;base64,'.base64_encode($cake->photo).'" width="200" height="150" alt="" style="border-radius:10px"/><center>';
    				  ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12" style="margin-bottom:20px;margin-top:20px">
              <div class="">
                <center><span><?= $cake->desert_name; ?></span></center>
              </div>
              <div class="">
                <center><span>IDR
                  <?php
    								echo number_format($cake->price,0,'.',',');
    							?>
                </span></center>
              </div>
              <div class="">
                <center><span>Stock: <?= $cake->stock; ?></span></center>
              </div>
              <div class="">
                <center><button type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-4">
      <div class="" style="background-color:rgba(92,102,109,0.7)">
        <div class="row">
          <div class="col-12">
            <center><h1 style="color:white;font-weight:bold;margin-top:20px">Pastry</h1></center>
          </div>
        </div>
        <?php foreach ($productPas as $pastry): ?>
        <div class="">
          <div class="row">
            <div class="col-12">
              <?php
    					  echo '<center><img src="data:image/png;base64,'.base64_encode($pastry->photo).'" width="200" height="150" alt="" style="border-radius:10px"/><center>';
    				  ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12" style="margin-bottom:20px;margin-top:20px">
              <div class="">
                <center><span><?= $pastry->desert_name; ?></span></center>
              </div>
              <div class="">
                <center><span>IDR
                  <?php
    								echo number_format($pastry->price,0,'.',',');
    							?>
                </span></center>
              </div>
              <div class="">
                <center><span>Stock: <?= $pastry->stock; ?></span></center>
              </div>
              <div class="">
                <center><button type="button" class="btn" name="button" style="border: none;background-color: white;border-radius: 10px">Add</button></center>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

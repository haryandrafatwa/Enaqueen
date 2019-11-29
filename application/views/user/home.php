<style media="screen">
  section{
    position: relative;
		justify-content: center;
		align-items: center;
		background-image:url(<?= base_url()?>assets/template/front/img/background/background-home.jpg);
		background-size: cover;
		background-attachment: fixed;
		min-height: 100%;
  }
</style>
<div class="" style="display: table;position: relative;top: 0;left: 0;height: 100%;width: 100%;">
  <div class="" style="display:table-cell;vertical-align:middle">
    <div class="" style="margin-left:auto;margin-right:auto">
      <center><strong><h1 style="color:white;font-weight:bolder;font-size:60px">ENAQUEEN</h1></strong></center>
      <center><h3 style="color:white">REAL TASTE REAL FOOD</h3></center>
      <center><a class="btn" style="color:white;background-color:rgba(92,102,109,0.7);font-weight: 600;font-size:18px;padding-left:20px;padding-right:20px" href="<?= base_url();?>User/Home/Food">ONLINE ORDER</a></center>
    </div>
  </div>
</div>
<script>
	var username = "<?= $username;?>";
	if(username == "admin"){
		document.getElementById("navbarCart").style.display = "none";
		document.getElementById("dataUser").style.display = "block";
		document.getElementById("dataTransaksi").style.display = "block";
	}
</script>

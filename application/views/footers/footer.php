    <style media="screen">
      .footer{
        color: white
      }
      .footer:hover{
        color: rgba(128,128,128,1);
        text-decoration: none;
      }
      .footer-text{
        color: white
      }
    </style>
    <div class="" style="margin-top: 50px;
	background-color: rgba(51,51,51,0.8)!important;padding: 50px">
        <div class="row justify-content-center">
          <a class="footer" href="#">Enaqueen.com</a>
        </div>
        <div class="row justify-content-center">
          <span class="footer-text">Copyright © 2019 Enaqueen Co. All rights reserved.</span>
        </div>
      </div>
    </div>
  </section>
  <script>var base_url = '<?php echo base_url(); ?>';</script>
  <script src="<?= base_url(); ?>js/auth.js"></script>
  <script>

    function toOtherPage(base_url){
      window.location.href = base_url;
    }
  </script>
  </body>
  <script>
    $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye-white");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      }else{
        input.attr("type", "password");
      }
    });

    function clearPhone(){
      document.getElementById("phoneNumber").value = "";
    }
  </script>
</html>

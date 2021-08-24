<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
				<h2 class="footer-heading">Achie PetShop & Clinic</h2>
				<p>PetShop dengan berbagai layanan kebutuhan  dan kesehatan hewan peliharaan.</p>
				<ul class="ftco-footer-social p-0">
      <!-- <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
      	<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li> -->
      	<li class="ftco-animate"><a href="http://instagram.com/achie.petshop" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
      </ul>
  </div>
  <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
  	<h2 class="footer-heading">News</h2>
  	<div class="block-21 mb-4 d-flex">
  		<!-- <a class="img mr-4 rounded" style="background-image: url(<?= base_url() ?>public/template/images/image_1.jpg);"></a> -->
  		<div class="text">
  			<h3 class="heading"><a href="https://www.instagram.com/p/CA4HnsnjNbJ/">Kalau nabrak kucing bakal kena sial 7 hari 7 malem.</a></h3>
  			<div class="meta">
  				<div><a href="#"><span class="icon-calendar"></span> June 1, 2020</a></div>
  				<div><a href="#"><span class="icon-person"></span> Admin</a></div>
  				<div><a href="#"><span class="icon-chat"></span> 19</a></div>
  			</div>
  		</div>
  	</div>
  	<div class="block-21 mb-4 d-flex">
  		<!-- <a class="img mr-4 rounded" style="background-image: url(<?= base_url() ?>public/template/images/image_2.jpg);"></a> -->
  		<div class="text">
  			<h3 class="heading"><a href="https://www.instagram.com/p/CAo99L0jTda/">Jujur, siapa disini yang suka ajak ngobrol kucingnya? </a></h3>
  			<div class="meta">
  				<div><a href="#"><span class="icon-calendar"></span> May 26, 2020</a></div>
  				<div><a href="#"><span class="icon-person"></span> Admin</a></div>
  				<div><a href="#"><span class="icon-chat"></span> 19</a></div>
  			</div>
  		</div>
  	</div>
  </div>
  <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
  	<h2 class="footer-heading">Quick Links</h2>
  	<ul class="list-unstyled">
  		<li><a href="<?= base_url() ?>" class="py-2 d-block">Home</a></li>
      <!-- <li><a href="#" class="py-2 d-block">About</a></li>
      	<li><a href="#" class="py-2 d-block">Services</a></li> -->
      	<li><a href="<?= base_url() ?>layanan" class="py-2 d-block">Layanan</a></li>
      	<?php if (empty($this->session->userdata('nama_pelanggan'))): ?>
      		<li><a href="<?= base_url() ?>daftar" class="py-2 d-block">Daftar</a></li>
      		<li><a href="<?= base_url() ?>login" class="py-2 d-block">Login</a></li>
      		<?php else: ?>
      			<li><a href="<?= base_url() ?>member" class="py-2 d-block">Akun Saya</a></li>
      			<li><a href="<?= base_url() ?>login/logout" class="py-2 d-block">Logout</a></li>
      		<?php endif ?>
      	</ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
      	<h2 class="footer-heading">Have a Questions?</h2>
      	<div class="block-23 mb-3">
      		<ul>
      			<li><span class="icon fa fa-map"></span><span class="text">Jl. Monjali No.40 D, Gemangan, Sinduadi, Mlati, Sleman, Daerah Istimewa Yogyakarta 55284</span></li>
      			<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62852-5358-7600</span></a></li>
      			<!-- <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li> -->
      		</ul>
      	</div>
      </div>
  </div>
  <div class="row mt-5">
  	<div class="col-md-12 text-center">

  		<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
  			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  			<!-- <p>Edited <i class="fa fa-heart" aria-hidden="true"></i> by Wijiyanti Okta</p> -->
  		</div>
  	</div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?= base_url() ?>public/template/js/jquery.min.js"></script>
<script src="<?= base_url() ?>public/template/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url() ?>public/template/js/popper.min.js"></script>
<script src="<?= base_url() ?>public/template/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/template/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>public/template/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url() ?>public/template/js/jquery.stellar.min.js"></script>
<script src="<?= base_url() ?>public/template/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url() ?>public/template/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url() ?>public/template/js/jquery.timepicker.min.js"></script>
<script src="<?= base_url() ?>public/template/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>public/template/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>public/template/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url() ?>public/template/js/google-map.js"></script>
<script src="<?= base_url() ?>public/template/js/main.js"></script>
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="SB-Mid-client-CWM7a-9jTxO2u3TA"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/60181e86a9a34e36b972a353/1etf3efub';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
</script>
<script type="text/javascript">

	$('#pay-button').click(function (event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");

		var kode_booking=$("input[name=kode_booking]").val();

		$.ajax({
			url: '<?=site_url()?>/booking/token/'+kode_booking,
			cache: false,

			success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
        	$("#result-type").val(type);
        	$("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
      }

      snap.pay(data, {
      	
      	onSuccess: function(result){
      		changeResult('success', result);
      		console.log(result.status_message);
      		console.log(result);
      		$("#payment-form").submit();
      	},
      	onPending: function(result){
      		changeResult('pending', result);
      		console.log(result.status_message);
      		$("#payment-form").submit();
      	},
      	onError: function(result){
      		changeResult('error', result);
      		console.log(result.status_message);
      		$("#payment-form").submit();
      	}
      });
  }
});
	});

</script>
<!--End of Tawk.to Script-->
</body>
</html>

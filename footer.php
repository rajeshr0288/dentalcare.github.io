   <!-- footer section --> 
			<footer class="ftco-footer ftco-bg-dark ftco-section">
<div class="container">
<div class="row mb-5">
<div class="col-md-3">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">DentaCare.</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
</div>
<ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
</ul>
</div>
<div class="col-md-2">
<div class="ftco-footer-widget mb-4 ml-md-5">
<h2 class="ftco-heading-2">Quick Links</h2>
<ul class="list-unstyled">
<li><a href="#" class="py-2 d-block">About</a></li>
<li><a href="#" class="py-2 d-block">Features</a></li>
<li><a href="#" class="py-2 d-block">Projects</a></li>
<li><a href="#" class="py-2 d-block">Blog</a></li>
<li><a href="#" class="py-2 d-block">Contact</a></li>
</ul>
</div>
</div>
<div class="col-md-4 pr-md-4">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Recent Blog</h2>
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
<div class="text">
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
<div class="meta">
<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
<div class="text">
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
<div class="meta">
<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-3">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Office</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
<li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="96fff8f0f9d6eff9e3e4f2f9fbf7fff8b8f5f9fb">[email&#160;protected]</span></span></a></li>
 </ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<p>
Copyright &copy;<script data-cfasync="false" src="#"></script><script type="78b3588cfca4d4eeef09f16e-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</p>
</div>
</div>
</div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
    <form class="text-center form-group" id="my_form">
<div class="form-group">

<input type="text" class="form-control" id="appointment_name" placeholder="Full Name" name="name">
</div>
<div class="form-group">

<input type="text" class="form-control" id="appointment_phone" placeholder="Phone" name="phone">
</div>   
<div class="form-group">

<input type="text" class="form-control" id="appointment_email" placeholder="Email" name="email">
</div>
    
<div class="row">
<div class="col-md-6">
<div class="form-group">

<input type="text" class="form-control appointment_date" placeholder="Date" name="date">
</div>
</div>
<div class="col-md-6">
<div class="form-group">

<input type="text" class="form-control appointment_time" placeholder="Time" name="time">
</div>
</div>
</div>
<div class="form-group">

<textarea  id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message" name="message"></textarea>
</div>
<div class="form-group">
    <input type="submit" id="submitButton"  class="btn btn-primary" name="submit" value="Make an Appointment">

</div>
</form>
</div>
</div>
</div>
</div>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script src="js/sweetalert2.all.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
 <script>
      $(function () {

        $('#my_form').on('submit', function (e) {
            
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'patient/booking.php',
            
            data: $('#my_form').serialize(),
           
            success: function (msg) {
                var msg = $.trim(msg);
                if(msg =='success'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Your Appointment has been Received',
                        showConfirmButton: false,
                        timer: 2000
                      })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: 'Please Try Again'
                      })
                }
             
            }
          });

        });

      });
    </script>
<script src="js/jquery.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/jquery-migrate-3.0.1.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/popper.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/bootstrap.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/jquery.waypoints.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/jquery.stellar.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/owl.carousel.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/aos.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/jquery.animateNumber.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/bootstrap-datepicker.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/jquery.timepicker.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/scrollax.min.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/google-map.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script src="js/main.js" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="78b3588cfca4d4eeef09f16e-text/javascript"></script>
<script type="78b3588cfca4d4eeef09f16e-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="78b3588cfca4d4eeef09f16e-|49" defer=""></script></body>
</html>

		<!-- footer section Ends--> 

<div class="site-footer bg-white">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 style="color: #7d321be3;">Contact</h3>
						<address>Zone A. Grand-Dakar, Dakar/Sénégal 11000</address>
						<ul class="list-unstyled links">
							<li><a href="tel://11234567890">+(221)777877676</a></li>
							<li><a href="tel://11234567890">33 902 12 12</a></li>
							<li><a href="mailto:info@mydomain.com">info.saintethereseGD@gmail.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 style="color: #7d321be3;">Sources</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">A propos</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Temoignages</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 style="color: #7d321be3;">Liens</h3>
						<ul class="list-unstyled links">
							<li><a href="#">Notre vision</a></li>
							<li><a href="#">Caritas</a></li>
							<li><a href="#">Ecrivez-nous</a></li>
						</ul>

						<ul class="list-unstyled social">
							<li style="background-color: #fff;"><a href="#"style="background-color: #7d321be3;"><span class="icon-instagram"></span></a></li>
							<li style="background-color: #fff;"><a href="#"style="background-color: #7d321be3;"><span class="icon-twitter"></span></a></li>
							<li style="background-color: #fff;"><a href="#"style="background-color: #7d321be3;"><span class="icon-facebook"></span></a></li>
							<li style="background-color: #fff;"><a href="#"style="background-color: #7d321be3;"><span class="icon-linkedin"></span></a></li>
							<li style="background-color: #fff;"><a href="#"style="background-color: #7d321be3;"><span class="icon-pinterest"></span></a></li>
							<li style="background-color: #fff;"><a href="#"style="background-color: #7d321be3;"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<!-- <div id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24716.24576210808!2d-17.465655288456773!3d14.705280353780898!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1739850e34d11%3A0xcfb731206ae45158!2s%C3%89glise%20catholique%20Sainte-Th%C3%A9r%C3%A8se%20de%20Grand%20Dakar!5e0!3m2!1sfr!2ssn!4v1730998683529!5m2!1sfr!2ssn" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> -->

			<div class="row mt-5">
				<div class="col-12 text-center">
				
					<!-- <p class="mb-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> License information: https://untree.co/license/ -->
					
					<p class="mb-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Tout droit reservé.<!-- &mdash; Designed with love by--> <a href="https://untree.co"><!--Untree.co--></a> <!-- License information: https://untree.co/license/ -->
					</p>
				</div>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.site-footer -->


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>




	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/tiny-slider.js"></script>
	<script src="assets/js/glightbox.min.js"></script>
	<script src="assets/js/aos.js"></script>
	<script src="assets/js/navbar.js"></script>
	<script src="assets/js/counter.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/jsdemande.js"></script>

	<!-- link script register -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/registerScript.js"></script>

	<!-- script demande JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<?php if(isset($_GET["page"]) && ($_GET["page"] == "demande" || $_GET["page"] == "demandesAdmin")): ?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
		<script>
			$(function(){
				//avoir la date d'aujourd'hui
				var today = new Date();
                var highlightDates = [];

				//ajout des 60 prochains jours

				for (let i = 0; i <=60; i++) {
					var date = new Date(today);
                    date.setDate(date.getDate() + i);
                    highlightDates.push(date.toISOString().split('T')[0]);
					
				}

				//initialisation de date picker
				$(".checkin-date").datepicker({
					dateFormat: 'dd/mm/yy',
					minDate: 0,
					beforeShowDay: function(date){
						var dateString = $.datepicker.formatDate('yy-mm-dd', date);
						if(highlightDates.indexOf(dateString) !== -1){
							return [true, 'highlight', 'Available' ];
						}
						return [true, '', ''];
					}
				});
			});
		</script>
	
	<?php endif; ?>
</body>
</html> 
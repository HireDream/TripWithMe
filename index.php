<!DOCTYPE HTML>
<html>
	<head>
		<title>SocialTrip</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="js/jquery.min.js"></script>
		<script src="js/semantic.js"></script>

		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
		<link rel="stylesheet" href="css/semantic.css" type="text/css" />

		<script src="js/jquery.bxslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider({
					auto: true,
					autoControls: true,
					minSlides: 4,
					maxSlides: 4,
					slideWidth:450,
					slideMargin: 10
				});
			});

			/* French initialisation for the jQuery UI date picker plugin. */
			/* Written by Keith Wood (kbwood{at}iinet.com.au) and Stéphane Nahmani (sholby@sholby.net). */
			jQuery(function($){
				$.datepicker.regional['fr'] = {
					prevText: '<<',
					nextText: '>>',
					monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
					'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
					monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
					'Jul','Aou','Sep','Oct','Nov','Dec'],
					dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
					dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
					dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
					weekHeader: 'Sm',
					dateFormat: 'dd/mm/yy',
					firstDay: 1,
					isRTL: false,
					showMonthAfterYear: false,
					yearSuffix: '',
					minDate: 0,
					maxDate: '+12M +0D',
					numberOfMonths: 1,
					showButtonPanel: false
					};
				$.datepicker.setDefaults($.datepicker.regional['fr']);
			});
		</script>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/jquery-ui.css" />

		<script src="js/responsiveslides.min.js"></script>
		<script>
			$(function () {
				$("#slider1").responsiveSlides({
					auto: true,
					nav: true,
					speed: 500,
					namespace: "callbacks"
				});
			});
		</script>
	</head>

	<body>
		<?php include 'includes/header.php' ?>

		<img width="100%" src="images/slider-bg.jpg"/>

		<div class="find-place">
			<div class="wrap" style="width: 80%">
				<div class="p-h">
					<span>Trouve ton</span>
					<label>VOYAGE</label>
				</div>

				<script src="js/jquery-ui.min.js"></script>
				<script>
					$(function() {
						$( "#datepicker" ).datepicker();
					});
				</script>
				<div class="p-ww">
					<form>
						<span>Où ?</span>
						<input class="dest" type="text" id="autocomplete" value="Pays, ville" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pays, ville';}">
						<span>Quand ?</span>
						<input class="date" id="datepicker" type="text" value="Indifférent" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Indifférent';}">
						<input type="submit" value="Go !" />
					</form>
				</div>
				<div class="clear"> </div>
			</div>
		</div>

		<script>
		  var placeSearch, autocomplete;
		  var componentForm = {
		    street_number: 'short_name',
		    route: 'long_name',
		    locality: 'long_name',
		    administrative_area_level_1: 'short_name',
		    country: 'long_name',
		    postal_code: 'short_name'
		  };

		  function initAutocomplete() {
		    autocomplete = new google.maps.places.Autocomplete(
		        (document.getElementById('autocomplete')),
		        {types: ['geocode']});
		    autocomplete.addListener('place_changed', fillInAddress);
		  }

		  function fillInAddress() {
		    var place = autocomplete.getPlace();
		    console.log(place);
		  }
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPmaFdA6QXTiAlVPgNIr4mZ-hwIyeI_qU&libraries=places&callback=initAutocomplete" async defer></script>

		<div class="offers">
			<div class="offers-head">
				<h3>Ajouts récents</h3>
				<p>Découvrez dés maintenant les dernières destinations ajoutées !</p>
			</div>
			  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			  <!-- FlexSlider -->
			  <script defer src="js/jquery.flexslider.js"></script>
			  <script type="text/javascript">
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: "slide",
			        animationLoop: true,
			        itemWidth:250,
			        itemMargin: 5,
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>
				 <section class="slider">
		        <div class="flexslider carousel">
		          <ul class="slides">
		            <li onclick="location.href='#';">
		  	    	    <img src="images/p1.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p2.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p3.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p4.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		            <li onclick="location.href='#';">
		  	    	    <img src="images/p5.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p6.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p1.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p2.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		             <li onclick="location.href='#';">
		  	    	    <img src="images/p3.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    	 <li onclick="location.href='#';">
		  	    	    <img src="images/p4.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p5.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p6.jpg" />
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    		</li>
		          </ul>
		        </div>
		      </section>
		</div>

		<div class="holiday-types">
			<div class="wrap">
				<div class="holiday-type-head">
					<h3>Holidays Type</h3>
					<span>get explore your dream to travel the world!</span>
				</div>
				<div class="holiday-type-grids">
					<div class="holiday-type-grid" onclick="location.href='#';">
						<span class="icon1"> </span>
						<a href="#">Cruise</a>
					</div>
					<div class="holiday-type-grid" onclick="location.href='#';">
						<span class="icon2"> </span>
						<a href="#">City Breaks</a>
					</div>
					<div class="holiday-type-grid" onclick="location.href='#';">
						<span class="icon3"> </span>
						<a href="#">Honeymoon</a>
					</div>
					<div class="holiday-type-grid" onclick="location.href='#';">
						<span class="icon4"> </span>
						<a href="#">Adventure</a>
					</div>
					<div class="holiday-type-grid" onclick="location.href='#';">
						<span class="icon5"> </span>
						<a href="#">Safari</a>
					</div>
					<div class="holiday-type-grid" onclick="location.href='#';">
						<span class="icon6"> </span>
						<a href="#">Beach</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>

		<div class="clients">
			<div class="client-head">
				<h3>Commentaires récents</h3>
				<span>what customer say about us and why love our services!</span>
			</div>
			<div class="client-grids">
				<ul class="bxslider">
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				  <li>
				  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
				  	<a href="#">Client Name</a>
				  	<span>United States</span>
				  	<label> </label>
				  </li>
				</ul>
			</div>
		</div>

		<?php include 'includes/footer.php' ?>

		<?php include 'includes/login.php' ?>
	</body>
</html>


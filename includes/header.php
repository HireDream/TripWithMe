<style>
.proposer {
	background-color: #1DD2AF; 
	padding: 10px;
	-webkit-transition: 0.5s all;
}

.proposer:hover {
	background-color: #A4A4A4;
}

</style>

<div class="header">
	<div class="wrap">
		<div class="logo" style="padding-left: 2%;">
			<a href="index-2.html"><img src="images/logo.png" title="voyage" /></a>
		</div>
		<div class="top-nav">
			<div class="navigation">
				<span class="menu"></span> 
				<ul class="navig cl-effect-16">
					<li>
						<a class="proposer" style="color: white; padding: 0.5em 1em; font-family: 'Open Sans', sans-serif;" href="destinations.html">Proposer un voyage</a>
					</li>
					<li><a class="cd-signin" href="#0">Connexion / Inscription</a></li>
				</ul>
			</div>
			<script src="js/modernizr.custom.js"></script>
			<script src="js/classie.js"></script>
		</div>
		<div class="clear"> </div>
	</div>
</div>

<script>
	$("span.menu").click(function(){
		$(" ul.navig").slideToggle("slow" , function(){});
	});
</script>
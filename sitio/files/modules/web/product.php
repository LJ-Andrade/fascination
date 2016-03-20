<!DOCTYPE html>
<html>
<head>
<?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head --> 
</head>
<body>
<?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation --> 
		<!-- Content -->
		<div class="container flexcontainer mainContainer">
			<div class="col-md-5 slider">
				<div id="slider" class="flexslider sliderMainDiv">
					<ul class="slides">
						<li><img src="../../../skin/images/products/si.jpg" class="img-responsive" data-imagezoom="true"/></li>
						<li><img src="../../../skin/images/products/si1.jpg" class="img-responsive" data-imagezoom="true"/></li>
						<li><img src="../../../skin/images/products/si2.jpg" class="img-responsive" data-imagezoom="true"/></li>
						<li><img src="../../../skin/images/products/si2.jpg" class="img-responsive" data-imagezoom="true"/></li>
					</ul>
				</div>
				<div id="carousel" class="flexslider sliderThumbDiv">
					<ul class="slides prodSliderThumb">
						<li><img src="../../../skin/images/products/si.jpg" class="img-responsive thumbImg"  /></li>
						<li><img src="../../../skin/images/products/si1.jpg" class="img-responsive thumbImg"  /></li>
						<li><img src="../../../skin/images/products/si2.jpg" class="img-responsive thumbImg"  /></li>
						<li><img src="../../../skin/images/products/si2.jpg" class="img-responsive thumbImg"  /></li>
					</ul>
				</div>
			</div>
			<div class="col-md-7">
				
				<h2>DETALLES </h2>

			</div>
	 </div>
  <!-- /Content -->
<?php include('../../includes/inc.web.footer.php'); ?> <!-- Footer --> 
<?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts --> 
<script src="../../js/script.web.imagezoom.js"></script> <!-- Zoom On Images -->
<script src="../../js/script.web.jquery.flexslider.js"></script><!-- FlexSlider -->
<!-- Custom Scripts -->
<script>
$(window).load(function() {
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 120,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});
</script>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="<?php base_url();?>assets/js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn_menu_i").trigger("click");
			ajax_div("C_inicio","<?=base_url();?>");
			$( "a.button" ).on( "click", function() {
				var val_button=$(this).text();
				var bnt=this;
				$(this).addClass('magictime swashIn');
					setTimeout(function(){
						$(bnt).removeClass('magictime swashIn');
					},100);
				var clase="C_"+val_button+"/index";
				ajax_div(clase,"<?=base_url();?>");
			});
		});
	</script>
	<meta charset="utf-8">
	<title>Developed by HrymTech</title>
	 <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/skeleton.css">
	 <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/normalize.css">
	 <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/main.css">
	 <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/animate.css">
	 <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/magic.css">
	 <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/hover.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	
	
	<div class="encabezado">
		<br>
		<!--inicio encabezado-->
			<div class="row">
			 	<div class="four columns"><h2 class="u-pull-right" style="color: #fff;">HrymTech</h2></div>
    			<div class="eight columns">
    				<br>
    				<a id="btn_menu_i" class="button hvr-float-shadow btn_size" href="#Inicio">Inicio</a>
    				<a id="btn_menu" class="button hvr-float-shadow btn_size" href="#Nosotros">Nosotros</a>
    				<a id="btn_menu" class="button hvr-float-shadow btn_size" href="#Galeria">Galeria</a>
    				<a id="btn_menu" class="button hvr-float-shadow btn_size" href="#Contacto">Contacto</a>
    			</div>
			</div>
			<!--fin encabezado-->
	</div>
	
	
	<div class="container">
		<!--Inicio ajax-->
		<div id="ajax_div">
			
		</div>
		<!--FIn ajax-->
	</div>


	<!--Inicio footer-->
		<div class="footer_s">
			<div id="footer_w">
				<div class="row">
		  			<div class="four columns">
		  				© Derechos reservados por HrymTech 2018.
		  			</div>
		  			<div class="four columns" style="text-align: center; font-size: 20px; color: rgb(12,79,135)" >
		  				<div class="row">
		  					<div class="three columns">
		  						<a href="https://github.com/anthonytepach" class="hvr-icon-bounce">
		  						<i class="fab fa-github-alt"></i>
		  					</div>
		  					<div class="three columns">
		  						<a href="https://twitter.com/anthony_tepach" class="hvr-icon-bounce">
		  						<i class="fab fa-twitter"></i>
		  						</a>
		  					</div>
		  					<div class="three columns">
		  						<a href="https://hrymtech.slack.com/" class="hvr-icon-bounce">
		  						<i class="fab fa-slack"></i>
		  						</a>
		  					</div>
		  					<div class="three columns">
		  						<a href="#Donaciones" class="hvr-icon-bounce">
		  						<i class="fab fa-paypal"></i>
		  						</a>
		  					</div>
		  				</div>
		  				
		  			</div>
		  			<div class="four columns" style="text-align: right;">
		  				Developed by <a href="mailto:developer@anthonytepach.com">@anthony_tepach</a>.
		  			</div>
		  		</div>
			</div>		  		
		</div>
		
		<!--fin footer-->
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>*primeros* | clan español de clash of clans</title>
	<link rel="stylesheet" href="web/style/style.css" media="screen" />
	<link rel="icon" href="web/images/imagenes/escudo.png" />
	<meta name="author" content="micro" />
	<meta name="copyright" content="micro" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta name="twitter:site" content="@CocPrimeros">
	<link rel="alternate" hreflang="es" href="https://primeroscoc.titaniumgamers.com/" />
	<meta name="Title" content="clan español clash of clans primeros coc" />
	<meta name="Description" content="clash of clans clan primeros coc, clan adulto, el mejor clan para divertirse. En el clan primeroscoc se juega a Clash of Clans. En español, cocprimeros, #8VVJCY9R, 8VVJCY9R, primeroscoc, juego" />
	<meta name="Keywords" content="clash of clans,  clan , primeros, coc,   #8VVJCY9R, primeroscoc." />
	<meta http-equiv="content-language" content="es-ES" />
	<meta name="Distribution" content="Global" />
	<meta name="googlebot" content="index, follow">
	<meta name="robots" content="index,follow">
	<meta property="og:url" content="https://primeroscoc.titaniumgamers.com/">
	<meta property="og:site_name" content="CLAN PRIMEROS | Clash of Clans">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="web/funciones/funciones.js"></script>
	<?php // include('funciones/funciones.php'); 
	?>
	<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
	<!--comunicacion con reloj-->
	<script>
		$(function() {
			var pull = $('#pull');
			menu = $('nav ul');
			menuHeight = menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});
	</script>
</head>

<body>
	<div id="contenedor">
		<div class="banner">
			<img src="web/images/imagenes/banner.jpg" alt="" />
			<nav>
				<ul>
					<li><a href="index.php" class="active">Bienvenida</a></li>
					<li><a href="web/php/coliders.html">Coliders</a></li>
					<li><a href="web/php/veteranos.html">Veteranos</a></li>
					<li><a href="web/php/videos.html">Videos</a></li>
					<li><a href="web/php/familia.php">Familia</a></li>
					<li><a href="web/php/guerras.php">Guerras</a></li>
					<li><a href="web/php/aldeas.html">Aldeas</a></li>
					<br clear="all" />
				</ul>
				<a id="pull" href="#">Menu</a>
			</nav>
		</div>
		<!--banner-->
		<div class="contenido">
			<div id="left">
				<div class="inner">
					<img src="web/images/imagenes/toplaterales.png" alt="" />
					<div>
						<img src="web/images/imagenes/escudo.png" />
					</div>
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="web/images/imagenes/toplaterales.png" alt="" />
					<h>Requisitos</h><br><br>
					<div class=img2>
						<img src="web/images/imagenes/requisitos.jpg" alt="" />
						<img src="web/images/imagenes/requisitos2.jpg" alt="" />
						<img src="web/images/imagenes/requisitos3.jpg" alt="" />
					</div>
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="web/images/imagenes/toplaterales.png" alt="" />
					<h>Visitas</h><br><br>

					<div id="counter">
						<div id="counter">
							<?php
							//---------- Contador de visitas
							$archivo = "visitas.txt"; // creas un txt donde vas a guardar la cantidad de visitas
							$abre = fopen($archivo, "r"); // abris el txt
							$total = fread($abre, filesize($archivo)); // lo lees
							fclose($abre); //cerras la conexion al archivo
							$abre = fopen($archivo, "w"); // lo abris de vuelta
							$total = ($total + 1); // al total de visitas le sumas 1
							$grabar = fwrite($abre, $total); // lo sobreescribis
							fclose($abre); // cerras nuevamente la conexxion al txt
							/*echo $total;*/    /* comentario */
							?>
						</div>
						<a title="contador visitas blogger"><img src="https://counter3.fcs.ovh/private/contadorvisitasgratis.php?c=bu4k4m3sbc874rfrbcagey9xr3u7yj1d" border="0" title="contador visitas blogger" alt="contador visitas blogger"></a>
						<!--estadisticas visitas  https://www.contadorvisitasgratis.com/geozoom.php?c=bu4k4m3sbc874rfrbcagey9xr3u7yj1d&base=counter3-->
					</div>
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
			</div>
			<!--left-->
			<div id="main">
				<div class="centro">
					<img src="web/images/imagenes/toplaterales.png" alt="" />
					<div class="titulo">
						<!--<img src="web/images/imagenes/titulo.jpg" alt="" />-->
						<h1>EL RESURGIR DE<br> <img src="web/images/iconos/escudo.png" alt="" /> <img src="web/images/iconos/star.png" alt="" />PRIMEROS <img src="web/images/iconos/star.png" alt="" /></h1>
					</div>
					<div class="cont">
						<p>Corren tiempos dificiles... Ante la dictadura del imperio Supercell con sus eternas actualizaciones, sus eternos muros, reyes y cambios del juego. el 10 de Diciembre de <w style="font-size:17px" ;>2013 </w> aparecio un grupo de aguerridos rebeldes.</p>
						<p>Se les ha podido llamar osos. Se les ha podido llamar petunios. seles ha podido llamar mancos. Incluso se les ha podido llamar cansinos, seguramente inspirados en su cansino lider. Pero no. Su nombre es Primeros!</p>
						<p>Tras estos largos años se les fueron uniendo grandes luchadores como el inteligente Vid, el marques Dreud, los legendarios Papi y Richard, las amazonas Ninfa y Cristuki o el fuerte Mamba. Por lo que su fuerza y destreza han mejorado. Siguen siendo mancos pero la mano que les falta siempre se la dan todos sus compañeros.</p>
						<h>Normas</h>
						<ul>
							<li>
								<p1>Respeto a los compañeros.</p1>
							</li>
							<li>
								<p1>Donaciones equilibradas.</p1>
							</li>
							<li>
								<p1>No pedir antes de donar.</p1>
							</li>
							<li>
								<p1>Los nuevos estan dos guerras sin entrar.</p1>
							</li>
							<li>
								<p1>Siempre con escudo rojo si no tienes reyes disponibles caldero de hechizos y un cuartel oscuro, si tienes todo disponible y quieres guerrear en verde, esta en ti hacer las guerras que quieras seguidas o no entrar en <a href="web/php/guerras.php">Guerras.</a> ( si no es <a href="web/php/guerras.php">Guerra</a> de entrenamiento ).</p1>
							</li>
							<br>
						</ul>
					</div>
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
			</div><!-- main-->
			<div id="right">
				<div class="inner">
					<img src="web/images/imagenes/toplaterales.png" alt="" />
					<div style="width:93%; margin:0 auto; overflow:hidden;">
						<script>
							(function() {
								var cx = '008452305118499538031:ewvkroyreoi';
								var gcse = document.createElement('script');
								gcse.type = 'text/javascript';
								gcse.async = true;
								gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(gcse, s);
							})();
						</script>
						<gcse:search></gcse:search>
					</div>
					<!--<img src="images/imagenes/constructor.png" alt="" style="width:90%;"/>-->
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="web/images/imagenes/toplaterales.png" alt="" />
					<div class="reloj">
						<h>Horario</h>
						<h>España</h>
						<table border="0" bgcolor="#a0a0a0" cellspacing=0 cellpadding=3 class="clock24st" style="line-height:14px; margin: 0 auto; padding:0; border-radius: 10px; ">
							<tr>
								<td bgcolor="black" class="clock24std" style="font-size:17px">
									<span class="clock24s" id="clock24_58764" style="color:gray; -webkit-text-stroke: 1.5px black; text-shadow: 0.1em 0.1em gray; color:white;  line-height:125%;">relojes pagina web</span>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							horaespaña();
						</script>
						<br>
						<h>Horario</h><br>
						<h>USA</h>
						<table border="0" bgcolor="#a0a0a0" cellspacing=0 cellpadding=3 class="clock24st" style="line-height:14px; margin: 0 auto; padding:0;">
							<tr>
								<td bgcolor="black" class="clock24std" style="font-size:17px; ">
									<span class="clock24s" id="clock24_86371" style="color:gray; -webkit-text-stroke: 1.5px black; text-shadow: 0.1em 0.1em gray; color:white;  line-height:125%;">relojes pagina web</span>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							horausa();
						</script>
						<br>
						<h>Horario</h>
						<h>Mexico</h>
						<table border="0" bgcolor="#a0a0a0" cellspacing=0 cellpadding=3 class="clock24st" style="line-height:14px; margin: 0 auto; padding:0;">
							<tr>
								<td bgcolor="black" class="clock24std" style="font-size:17px;">
									<span class="clock24s" id="clock24_90267" style="color:gray; -webkit-text-stroke: 1.5px black; text-shadow: 0.1em 0.1em gray; color:white;  line-height:125%;">relojes pagina web</span>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							horamexico();
						</script>
					</div>
					<!--reloj-->
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<!--inner-->
				<div class="inner">
					<img src="web/images/imagenes/toplaterales.png" alt="" />
					<!--<a class="twitter-timeline" data-lang="es"  data-width="20" data-height="300" data-dnt="true" href="https://twitter.com/CocPrimeros">Tweets by CocPrimeros</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>		-->
					<!--	<div class="twitter">-->
					<a class="twitter-timeline" data-chrome="noheader nofooter noscrollbar transparent" data-width="200" data-height="400" data-theme="dark" href="https://twitter.com/CocPrimeros">Tweets by CocPrimeros</a>
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					<!--data-border-color="white" data-chrome="noheader nofooter noscrollbar noborders transparent"-->
					<!--	 </div>-->
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
				<div class="inner">
					<img src="web/images/imagenes/toplaterales.png" />
					<h>Redes sociales</h>
					<div class="tabla">
						<table>
							<tr>
								<td><a href="https://www.twitter.com/CocPrimeros" target="blank"><img src="web/images/imagenes/twitter.png" alt="" id="imge" /></a></td>
								<td><a href="https://www.youtube.com/channel/UCKBLqoHskWGL1De_0KaA0Kw" target="blank"><img src="web/images/imagenes/youtube.png" alt="" id="imge" /></a></td>

							</tr>
							<tr>
								<td><a href="https://www.instagram.com/clash_of_clans_primeros/" target="blank"><img src="web/images/imagenes/instagram.png" alt="" id="imge" /></a></td>
								<td><a href="https://www.facebook.com/profile.php?id=100008548454333" target="blank"><img src="web/images/imagenes/facebook.png" alt="" id="imge" /></a></td>
								<br>
							</tr>
						</table>
					</div>
					<img src="web/images/imagenes/bottomlaterales.png" alt="" />
				</div>
			</div>
			<!--rigth-->
		</div>
		<!--contenido-->
	</div>
	<!--contenedor-->
	<div id="pie">
		<div id="diseño">
			<p>Gracias a <a href="https://www.youtube.com/channel/UCAfuTUdmRn0PLtN3uwtIRPA/videos"> kai cami coc </a> por la edicion de videos</p>
			<p>Designed by Micro (microa4@gmail.com)</p>
			<p>Copyright ® 2017 Primeros coc</p>
		</div>
		<div id="copyright">
		</div>
		<div class="politicas" id="politicas">
			<a href="web/html/politicaDePrivacidad.html" target=”_blank”>
				<p class="privacidad" id="privacidad"> Política de privacidad</p>
			</a>
			<a href="web/html/avisoLegal.html" target=”_blank”>
				<p class="privacidad" id="aviso"> Aviso Legal</p>
			</a>
			<a href="web/html/politicaDeCookies.html" target=”_blank”>
				<p class="privacidad" id="cookies"> Política de Cookies</p>
			</a>
		</div>
	</div>
</body>

</html>
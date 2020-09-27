<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="googlebot" content="noindex">
<meta name="robots" content="noindex">
<title>*primeros*</title>
<link rel="stylesheet" href="../style/apistyle.css" media="screen" />
<link rel="icon" href="../images/imagenes/escudo.png" />
<!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">-->
<meta property="og:url" content="https://primeroscoc.com/">
<meta property="og:site_name" content="CLAN PRIMEROS | Clash of Clans">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="../funciones/funciones.js"></script>
<?php include('../funciones/funciones.php'); ?>

<script type="text/javascript">
 
  desplegable();
</script>

   
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
 	
	
<title><?php // echo $dato["name"]; ?></title>


<!-- SCRIPT DE GUERRA--> 



 



</head>
<body>
<div id="contenedor"> 

	
	<div class="banner">
		<img src="../images/imagenes/banner.jpg" alt="" />
	   <nav>
            <ul>
                <li><a href="../../index.php" >Bienvenida</a></li>
		        <li><a href="coliders.html" >Coliders</a></li>
		        <li><a href="veteranos.html" >Veteranos</a></li>
				<li><a href="videos.html" >Videos</a></li>
				<li><a href="familia.php" class="active">Familia</a></li>
                <li><a href="guerras.php" >Guerras</a></li>
                <li><a href="aldeas.html" > Aldeas<center >	</a></li>
                
               
			   <br clear="all" />
           </ul>
           <a id="pull" href="#">Menu</a>
        </nav>
    </div><!--banner-->
	

	
	
	
	
	<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> 
	
	<?php //$dato=$dato2?>
	<div id="main2">
		<div class="centro2" style="background-color:#e3cfb5;  ">
				<img src="../images/imagenes/topcentral.png" alt="" />
			<div id="actualidad" >
				<div >
					<form action="familia.php" method="get" class="botones" >
						<div class="boton"><button  class="bot" name="primeros" value="primeros"   type="submit"><h1>Primeros</h1></button></div>
						<div class="boton"><button name="pekeprimeros" value="pekeprimeros"   type="submit"><h1>Pekeprimeros</h1></button></div>
						<div class="boton"><button name="familia" value="familia"   type="submit"><h1>Familia</h1></button></div>


								
					</form>
				</div>
				<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
				<?php 
				
			if(isset($_GET["primeros"])){  
					$dato=$datop; ?>
				<div id="clanes">
					<table class = "clantable">
						<tr>
							<td rowspan="11"><!--Nivel:--><?php $copas = "copas"; //if (isset($dato["clanLevel"])){ echo $dato["clanLevel"];} ?><br/><img src="<?php if (isset($dato["badgeUrls"]["medium"])){ echo $dato["badgeUrls"]["medium"];} ?>" alt="<?php if (isset($dato["name"])){ echo$dato["name"];}  ?>"/></td>
							<td  style="font-family: supercell;"><?php if (isset( $dato["name"])){ echo  $dato["name"];} ?></td><td><?php if (isset($dato["tag"])){ echo $dato["tag"];} ?></td>
							<td rowspan="11">descrip<?php if (isset($dato["description"])){ echo $dato["description"]; } ?></td>
						</tr>
						<tr>
							<td>Puntos totales</td><td><?php if (isset($dato["clanPoints"])){ echo $dato["clanPoints"];} ?>  </td>
						</tr>
						<tr>
							<td>Guerras ganadas</td><td><?php if (isset($dato["warWins"])){ echo$dato["warWins"];}  ?></td>
						</tr>
						<tr>
							<td>Racha de victorias</td><td><?php  if (isset($dato["warWinStreak"])){ echo $dato["warWinStreak"];} ?></td>
						</tr>
						<tr>
							<td>Guerras empatadas</td><td><?php if (isset($dato["warTies"])){ echo $dato["warTies"]; } ?></td>
						</tr>
						<tr>
							<td>Guerras perdidas</td><td><?php if (isset($dato["warLosses"])){ echo $dato["warLosses"]; }?></td>
						</tr>
						<tr>
							<td>Miembros</td><td><?php  if (isset($dato["members"])){ echo $dato["members"]; } ?>/50</td>
						</tr>
						<tr>
							<td>Tipo de clan</td><td><?php if (isset($dato["type"])){ echo $dato["type"]; } ?></td>
						</tr>
						<tr>
							<td>Trofeos requeridos</td><td><?php if (isset($dato["requiredTrophies"])){ echo $dato["requiredTrophies"]; }?></td>
						</tr>
						<tr>
							<td>Frecuencia de guerra</td><td><?php if (isset($dato["warFrequency"])){ echo $dato["warFrequency"]; }	 ?></td>
						</tr>
						<tr>
							<td>Ubicacion del clan</td><td><?php if (isset($dato["location"]["name"])){ echo $dato["location"]["name"]; } ?></td>
						</tr>
					</table>
				</div>
				<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
				<div id="clanes">
					
				
			<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> 	
				<div class="clan">	
					<table  border ="1" class = "miembros"  >
						<?php if(isset($dato["memberList"])){$mienbros = $dato["memberList"];}
							if(isset($mienbros)){
							foreach ($mienbros as $mienbro) {
						?>
						
						<tr>
							<td><?php  if (isset($mienbro["clanRank"])){ echo $mienbro["clanRank"]; } ?></td>
							<td ><img src="<?php if (isset($mienbro["league"]["iconUrls"]["tiny"])){ echo $mienbro["league"]["iconUrls"]["tiny"]; } ?>" alt="<?php if (isset($mienbro["league"]["name"])){ echo $mienbro["league"]["name"]; }  ?>"/></td>
							<td class="exp"><?php if (isset($mienbro["expLevel"])){ echo $mienbro["expLevel"]; } ?></td>
							<td class="nombre"><?php  if (isset($mienbro["name"])&&($mienbro["role"])){ 	echo "<b>", $mienbro["name"], "</b><br/>", $mienbro["role"]; }
						 ?></td>
							<td class='dona'>Donado:<br/><?php if (isset($mienbro["donations"])){ echo "<fieldset >".$mienbro["donations"]."</fieldset>"; } ?></td>
							<td class='dona'>Recibido:<br/><?php if (isset($mienbro["donationsReceived"])){ echo "<fieldset >".$mienbro["donationsReceived"]."</fieldset>"; } ?></td>
							<td class='cop'><?php if (isset($mienbro["trophies"])){ echo "<fieldset >".$mienbro["trophies"]." ".'<img src="../images/iconos/'.$copas.'.png" ; />'."</fieldset>"; }?></td>
							
						</tr>
						
						<?php
							}}
						?>
					</table>
				</div>	<!--clan--> 
			</div>	<!--clanes--> 

			<?php	}
			else if(isset($_GET["pekeprimeros"])){  
					$dato=$dato2;?>
				<div id="clanes">
					<table class = "clantable">
						<tr>
							<td rowspan="11"><!--Nivel:--><?php $copas = "copas";//if (isset($dato["clanLevel"])){ echo $dato["clanLevel"];} ?><img src="<?php if (isset($dato["badgeUrls"]["medium"])){ echo $dato["badgeUrls"]["medium"];} ?>" alt="<?php if (isset($dato["name"])){ echo$dato["name"];}  ?>"/></td>
							<td  style="font-family: supercell;"><?php if (isset( $dato["name"])){ echo  $dato["name"];} ?></td><td><?php if (isset($dato["tag"])){ echo $dato["tag"];} ?></td>
							<td rowspan="11">descrip<?php if (isset($dato["description"])){ echo $dato["description"]; } ?></td>
						</tr >
						<tr class="copas">
							<td >Puntos totales</td><td ><?php $copas = "copas"; if (isset($dato["clanPoints"])){ echo $dato["clanPoints"]; echo " ".'<img src="../images/iconos/'.$copas.'.png" ; />';} ?></td>
						</tr>
						<tr class="copas">
							<td>Guerras ganadas</td><td><?php if (isset($dato["warWins"])){ echo$dato["warWins"];} ?></td>
						</tr>
						<tr class="copas">
							<td>Racha de victorias</td><td><?php  if (isset($dato["warWinStreak"])){ echo $dato["warWinStreak"];} ?></td>
						</tr>
						<tr class="copas">
							<td>Guerras empatadas</td><td><?php if (isset($dato["warTies"])){ echo $dato["warTies"]; } ?></td>
						</tr>
						<tr class="copas">
							<td>Guerras perdidas</td><td><?php if (isset($dato["warLosses"])){ echo $dato["warLosses"]; }?></td>
						</tr>
						<tr class="copas">
							<td>Miembros</td><td><?php  if (isset($dato["members"])){ echo $dato["members"]; } ?>/50</td>
						</tr>
						<tr class="copas">
							<td>Tipo de clan</td><td><?php if (isset($dato["type"])){ echo $dato["type"]; } ?></td>
						</tr>
						<tr class="copas">
							<td>Trofeos requeridos</td><td><?php if (isset($dato["requiredTrophies"])){ echo $dato["requiredTrophies"]; echo " ".'<img src="../images/iconos/'.$copas.'.png" ; />'; }?>
							</td>
						</tr>
						<tr class="copas">
							<td>Frecuencia de guerra</td><td><?php if (isset($dato["warFrequency"])){ echo $dato["warFrequency"]; }	 ?></td>
						</tr>
						<tr class="copas">
							<td>Ubicacion del clan</td><td><?php if (isset($dato["location"]["name"])){ echo $dato["location"]["name"]; } ?></td>
						</tr>
					</table>
				</div>
				<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
				<div id="clanes">
					
				
			<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> 	
				<div class="clan">	
					<table  border ="1" class = "miembros"  >
						<?php if(isset($dato["memberList"])){$mienbros = $dato["memberList"];}
							if(isset($mienbros)){
							foreach ($mienbros as $mienbro) {
						?>
						
						<tr>
							<td><?php  if (isset($mienbro["clanRank"])){ echo $mienbro["clanRank"]; } ?></td>
							<td ><img src="<?php if (isset($mienbro["league"]["iconUrls"]["tiny"])){ echo $mienbro["league"]["iconUrls"]["tiny"]; } ?>" alt="<?php if (isset($mienbro["league"]["name"])){ echo $mienbro["league"]["name"]; }  ?>"/></td>
							<td class="exp"><?php if (isset($mienbro["expLevel"])){ echo $mienbro["expLevel"]; } ?></td>
							<td class="nombre"><?php  if (isset($mienbro["name"])&&($mienbro["role"])){ 	echo "<b>", $mienbro["name"], "</b><br/>", $mienbro["role"]; }
						 ?></td>
							<td class='dona'>Donado:<br/><?php if (isset($mienbro["donations"])){ echo "<fieldset >".$mienbro["donations"]."</fieldset>"; } ?></td>
							<td class='dona'>Recibido:<br/><?php if (isset($mienbro["donationsReceived"])){ echo "<fieldset >".$mienbro["donationsReceived"]."</fieldset>"; } ?></td>
							<td class='cop'><?php if (isset($mienbro["trophies"])){ echo "<fieldset >".$mienbro["trophies"]." ".'<img src="../images/iconos/'.$copas.'.png" ; />'."</fieldset>"; }?></td>
							
						</tr>
						
						<?php
							}}
						?>
					</table>
				</div>	<!--clan--> 
			</div>	<!--clanes--> 


			



			<?php		}

			else if(isset($_GET["familia"])){
				error_reporting(E_ERROR | E_PARSE);  
				$equipo=$_GET["familia"] ; 
				$copas = "copas";
				$union = array_merge($dato2["memberList"], $datop["memberList"]);
 				$union = array_map('serialize', $union);
 				$datos = array();
 				foreach (array_unique($union) as $v) {
    			$datos[] = unserialize($v);}
 				//echo '<pre>';
				//print_r($datos);
				//echo '</pre>';
								error_reporting(E_ERROR | E_PARSE); //poner solo los errores que quieres que muestre se puede sumar: E_ERROR | E_WARNING | E_PARSE | E_NOTICE
									foreach ($datos as $key => $row) 
									{ $aux[$key] = $row['trophies'];
									array_multisort($aux, SORT_DESC, $datos);
								
								}?>
								
						<div id="clanes">
					
				
			<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> 	
				<div class="clan">	
					<table border="1" class = "miembros"  >
						<?php if(isset($dato["memberList"])){$mienbros = $dato["memberList"];}
							if(isset($datos)){
							foreach ($datos as $mienbro) {
						?>
						<tr>
							<td><?php  if (isset($mienbro["clanRank"])){ echo $mienbro["clanRank"]; } ?></td>
							<td ><img src="<?php if (isset($mienbro["league"]["iconUrls"]["tiny"])){ echo $mienbro["league"]["iconUrls"]["tiny"]; } ?>" alt="<?php if (isset($mienbro["league"]["name"])){ echo $mienbro["league"]["name"]; }  ?>"/></td>
							<td class="exp"><?php if (isset($mienbro["expLevel"])){ echo $mienbro["expLevel"]; } ?></td>
							<td class="nombre"><?php  if (isset($mienbro["name"])&&($mienbro["role"])){ 	echo "<b>", $mienbro["name"], "</b><br/>", $mienbro["role"]; }
						 ?></td>
							<td class='dona'>Donado:<br/><?php if (isset($mienbro["donations"])){ echo "<fieldset >".$mienbro["donations"]."</fieldset>"; } ?></td>
							<td class='dona'>Recibido:<br/><?php if (isset($mienbro["donationsReceived"])){ echo "<fieldset >".$mienbro["donationsReceived"]."</fieldset>"; } ?></td>
							<td class='cop'><?php if (isset($mienbro["trophies"])){ echo "<fieldset >".$mienbro["trophies"]." ".'<img src="../images/iconos/'.$copas.'.png" ; />'."</fieldset>"; }?></td>
							
						</tr>
						
										
						<?php
							}}
						?>
					</table>
				</div>	<!--clan--> 
			</div>	<!--clanes--> 
				
			
			






					<?php 			
									
								
 
//echo '<pre>';
//print_r($dato);
//echo '</pre>';



				?>

			<?php	}
			else {$dato=$datop;?>
				<div id="clanes">
					
					
					<table class = "clantable">
						<tr>
							<td rowspan="11"><!--Nivel:--><?php  $copas = "copas"; //if (isset($dato["clanLevel"])){ echo $dato["clanLevel"];} ?><img src="<?php if (isset($dato["badgeUrls"]["medium"])){ echo $dato["badgeUrls"]["medium"];} ?>" alt="<?php if (isset($dato["name"])){ echo$dato["name"];}  ?>"/></td>
							<td  style="font-family: supercell;"><?php if (isset( $dato["name"])){ echo  $dato["name"];} ?></td><td><?php if (isset($dato["tag"])){ echo $dato["tag"];} ?></td>
							<td rowspan="11">descrip<?php if (isset($dato["description"])){ echo $dato["description"]; } ?></td>
						</tr>
						<tr>
							<td>Puntos totales</td><td><?php if (isset($dato["clanPoints"])){ echo $dato["clanPoints"];} ?></td>
						</tr>
						<tr>
							<td>Guerras ganadas</td><td><?php if (isset($dato["warWins"])){ echo$dato["warWins"];}  ?></td>
						</tr>
						<tr>
							<td>Racha de victorias</td><td><?php  if (isset($dato["warWinStreak"])){ echo $dato["warWinStreak"];} ?></td>
						</tr>
						<tr>
							<td>Guerras empatadas</td><td><?php if (isset($dato["warTies"])){ echo $dato["warTies"]; } ?></td>
						</tr>
						<tr>
							<td>Guerras perdidas</td><td><?php if (isset($dato["warLosses"])){ echo $dato["warLosses"]; }?></td>
						</tr>
						<tr>
							<td>Miembros</td><td><?php  if (isset($dato["members"])){ echo $dato["members"]; } ?>/50</td>
						</tr>
						<tr>
							<td>Tipo de clan</td><td><?php if (isset($dato["type"])){ echo $dato["type"]; } ?></td>
						</tr>
						<tr>
							<td>Trofeos requeridos</td><td><?php if (isset($dato["requiredTrophies"])){ echo $dato["requiredTrophies"]; }?></td>
						</tr>
						<tr>
							<td>Frecuencia de guerra</td><td><?php if (isset($dato["warFrequency"])){ echo $dato["warFrequency"]; }	 ?></td>
						</tr>
						<tr>
							<td>Ubicacion del clan</td><td><?php if (isset($dato["location"]["name"])){ echo $dato["location"]["name"]; } ?></td>
						</tr>
					</table>
				
			</div><!--borde-->
				</div>
				<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div>
				<div id="clanes">
					
				
			<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> 	
				<div class="clan">	
					<table  border ="1" class = "miembros"  >
						<?php if(isset($dato["memberList"])){$mienbros = $dato["memberList"];}
							if(isset($mienbros)){
							foreach ($mienbros as $mienbro) {
						?>
						
						<tr>
							<td><?php  if (isset($mienbro["clanRank"])){ echo $mienbro["clanRank"]; } ?></td>
							<td ><img src="<?php if (isset($mienbro["league"]["iconUrls"]["tiny"])){ echo $mienbro["league"]["iconUrls"]["tiny"]; } ?>" alt="<?php if (isset($mienbro["league"]["name"])){ echo $mienbro["league"]["name"]; }  ?>"/></td>
							<td class="exp"><?php if (isset($mienbro["expLevel"])){ echo $mienbro["expLevel"]; } ?></td>
							<td class="nombre"><?php  if (isset($mienbro["name"])&&($mienbro["role"])){ 	echo "<b>", $mienbro["name"], "</b><br/>", $mienbro["role"]; }
						 ?></td>
							<td class='dona'>Donado:<br/><?php if (isset($mienbro["donations"])){ echo "<fieldset >".$mienbro["donations"]."</fieldset>"; } ?></td>
							<td class='dona'>Recibido:<br/><?php if (isset($mienbro["donationsReceived"])){ echo "<fieldset >".$mienbro["donationsReceived"]."</fieldset>"; } ?></td>
							<td class='cop'><?php if (isset($mienbro["trophies"])){ echo "<fieldset >".$mienbro["trophies"]." ".'<img src="../images/iconos/'.$copas.'.png" ; />'."</fieldset>"; }?></td>
							
						</tr>
						
						<?php
							}}
						?>
					</table>
				</div>	<!--clan--> 
			</div>	<!--clanes--> 			
			<?php	}	?>	
	 				
		













		
			<!--current war buena--> 
			
			
			
			
			
			
			
			
			
			
		
		
		
		
			<img src="../images/imagenes//bottomcentral.png" alt="" />
		</div>	<!--centro2-->	
	</div>	<!--main2-->	
			
	
	
		

	<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> 
	
	
	
	

	


	
</div><!--contenedor-->
		<div id="pie" >
			<div id="diseño">
				<p>Gracias a <a href="https://www.youtube.com/channel/UCAfuTUdmRn0PLtN3uwtIRPA/videos"> kai cami coc </a> por la edicion de videos</p>
				<p>Designed by Micro (microa4@gmail.com)</p>
				<p>Copyright ® 2017 Primeros coc</p>
			</div>
			<div id="copyright"> 
			</div>
		</div>
</body>
</html>

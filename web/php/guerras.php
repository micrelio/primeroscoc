<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
<?php //var_dump($execute); ?>
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
		        <li><a href="familia.php">Familia</a></li>
                <li><a href="guerras.php" class="active">Guerras</a></li>
				<li><a href="aldeas.html" > Aldeas<center >	</a></li>
				<br clear="all" />
			</ul>
			<a id="pull" href="#">Menu</a>
		</nav>
	</div><!--banner-->

	<div style="clear: both; height: 10px; overflow: hidden">&nbsp;</div> 

	<div id="main2" >
		<div class="centro2" style="background-color:#e3cfb5; <!--font-family:Arial, Helvetica, sans-serif; font-size:25px;-->"> <!--style="font-family:Arial, Helvetica, sans-serif; background-color: #aaa;"-->

			<img src="../images/imagenes/topcentral.png" alt="" />
<!--pekes estado de guerra--> 
			<div >
					<form action="guerras.php" method="get" class="botones" >
						<div class="boton"><button  class="bot" name="primeros" value="primeros"   type="submit"><h1>Primeros</h1></button></div>
						<div class="boton"><button name="pekeprimeros" value="pekeprimeros"   type="submit"><h1>Pekeprimeros</h1></button></div>
					</form>
				</div>
<?php 	if(isset($_GET["primeros"])){  
			$datog2=$datog; 
			}
		else if(isset($_GET["pekeprimeros"])){  
				$datog2=$datog2;
				}	
		else {
			$datog2=$datog2;
		}
			?>







<?php if(isset($datog2["clan"]["members"])){ $mienbrospk = $datog2["clan"]["members"];}
	if(isset($datog2["opponent"]["members"])){ $mienbrospk2 = $datog2["opponent"]["members"];} 
			?>
			<div id="guerrae">
			            <div class="wari" ><!--style="font-family:Arial, Helvetica, sans-serif; font-size:17px;"-->
							<table  >
								<tr class="logo">
									<td style="width:40%; "> <?php  if (isset($datog2["clan"]["name"])){ echo $datog2["clan"]["name"];} ?></br><img src="<?php  if (isset($datog2["clan"]["badgeUrls"]["small"])){ echo $datog2["clan"]["badgeUrls"]["small"];} ?>"/>
									</td>
									<td style="font-size:80px;">VS
									</td>
									<td style="width:40%; "> <?php  if (isset($datog2["opponent"]["name"])){ echo $datog2["opponent"]["name"];} ?></br><img src="<?php  if (isset($datog2["opponent"]["badgeUrls"]["small"])){ echo $datog2["opponent"]["badgeUrls"]["small"];} ?>"/>
									</td>
								</tr>
							</table>






					<?php	echo	"<table  >";
								 if (isset($datog2["state"])){ $estadog2 = $datog2["state"];
								    switch ($estadog2) {
                                        case "preparation":
                                           echo"<tr ><t style=' font-family: supercell; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black; font-size:25px; text-align:center; color:red;  animation-name: parpadeo; animation-duration: 1s; animation-timing-function: linear; animation-iteration-count: infinite;'>Dia de  preparacion</t>
                               			 </tr>
                                			<tr>
												<td>Hora de inicio </br>  ";
													/*date_default_timezone_set('Europe/Amsterdam');*/
	 													if(isset($datog2["startTime"])){
															$fechai = $datog2["startTime"];
															$di = substr($fechai, 6, 2);//sacamos numeros para dia
															$mi = substr($fechai, 4, 2);//sacamos numeros para mes
															$yi = substr($fechai, 0, 4);//sacamos numeros para año
															$hie= substr($fechai, 9, 2)+1;//sacamos 2 numero para horas
															$hiu= substr($fechai, 9, 2)-5;//sacamos 2 numero para horas
															$him= substr($fechai, 9, 2)-6;//sacamos 2 numero para horas
															$ii= substr($fechai, 11, 2);//sacamos 2 2 numero para minutos
															$si= substr($fechai, 13, 2);//sacamos numero para segundos
															$inicio=$hie."".$ii/*."".$si*/; 
															$iniciou=$hiu."".$ii/*."".$si*/;
															$iniciom=$him."".$ii/*."".$si*/;
																				
															   
															$esp="esp";
															$usa="usa";
															$mex="mex";

															echo '<img src="../images/iconos/'.$esp.'.png" ; />';
															$horae = DateTime::createFromFormat('Hi', $inicio);
																echo $horae->format('H:i ');

															echo '<img src="../images/iconos/'.$usa.'.png" ; />';
															$horau = DateTime::createFromFormat('Hi', $iniciou);
																echo $horau->format('H:i ');
															
															echo '<img src="../images/iconos/'.$mex.'.png" ; />';
															$horam = DateTime::createFromFormat('Hi', $iniciom);
																echo $horam->format('H:i ');
														 	} //del if 	
															echo "</td>

											</tr>
											<tr>
												<td>Participantes ";
												 if(isset($datog2["teamSize"])){ echo $datog2["teamSize"];} "</td>
											</tr>";
                                            break;
                                        case "inWar":
                                            echo"<tr><t style='font-family: supercell; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black; font-size:25px; text-align:center; color:#6EFF33;  animation-name: parpadeo; animation-duration: 1s; animation-timing-function: linear; animation-iteration-count: infinite;'>Dia de guerra</t></tr>
                                            <tr>
												<td>Hora de final </br>   ";
													if(isset($datog2["endTime"])){
															$fechaf = $datog2["endTime"];
															$df = substr($fechaf, 6, 2);//sacamos numeros para dia
															$mf = substr($fechaf, 4, 2);//sacamos numeros para mes
															$yf = substr($fechaf, 0, 4);//sacamos numeros para año
															$hfe= substr($fechaf, 9, 2)+1;//sacamos 2 numero para horas
															$hfu= substr($fechaf, 9, 2)-5;//sacamos 2 numero para horas
															$hfm= substr($fechaf, 9, 2)-6;//sacamos 2 numero para horas
															$if= substr($fechaf, 11, 2);//sacamos 2 2 numero para minutos
															$sf= substr($fechaf, 13, 2);//sacamos numero para segundos
															$final=$hfe."".$if/*."".$si*/; 
															$finalu=$hfu."".$if/*."".$si*/;
															$finalm=$hfm."".$if/*."".$si*/;
																					
															$esp="esp";
															$usa="usa";
															$mex="mex";

															echo '<img src="../images/iconos/'.$esp.'.png" ; />';
															$horaef = DateTime::createFromFormat('Hi', $final);
																echo $horaef->format('H:i ');

															
															echo '<img src="../images/iconos/'.$usa.'.png" ; />';
															$horauf = DateTime::createFromFormat('Hi', $finalu);
																echo $horauf->format('H:i ');
															
															echo '<img src="../images/iconos/'.$mex.'.png" ; />';
															$horamf = DateTime::createFromFormat('Hi', $finalm);
																echo $horamf->format('H:i ');
															} //del if  
												echo "</td>

											</tr>
											<tr>
												<td></br>Participantes ";
												 if(isset($datog2["teamSize"])){ echo $datog2["teamSize"];} "</td>
											</tr>";
				                            break;
                                        case "warEnded":
                                           echo"<tr><t style=' font-family: supercell; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black; font-size:25px; text-align:center; color:red;  animation-name: parpadeo; animation-duration: 1s; animation-timing-function: linear; animation-iteration-count: infinite;'>Guerra terminada</t></tr>";
                                            break;    
                                        case "notInWar":
                                           echo"<tr><t style=' font-family: supercell; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black; font-size:25px; text-align:center; color:red;  animation-name: parpadeo; animation-duration: 1s; animation-timing-function: linear; animation-iteration-count: infinite;'>Sin guerra</t></tr>";
                                            break;    
/*cambiar por buscar guerra*/             default;
                                            echo"<tr><t style=' font-family: supercell; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black; font-size:25px; text-align:center; color:red;  animation-name: parpadeo; animation-duration: 1s; animation-timing-function: linear; animation-iteration-count: infinite;'>Sin guerra</t></tr>";
                                     }//switch
								 }//isset estadog2
								?>
							</table >
						</div><!--wari-->  <br>













<!-- participantes pekes-->
					<div id="guerra">
						<div class="warp">
							
							<table  >
								<?php if (isset($estadog2)&&($estadog2=='inWar')){
							 	?>
							 <tr>
									<td colspan="3"><?php if(isset($datog2["clan"]["name"])){echo $datog2["clan"]["name"];} ?> </td>
								</tr>
								<tr>
									<td  colspan="3" ><img src="<?php if(isset($datog2["clan"]["badgeUrls"]["medium"])){echo $datog2["clan"]["badgeUrls"]["medium"];} ?>"/><br><br></td>
								</tr >
								<tr class="marcador">
									<td style="float :left;" >estrellas  </td><td><?php if(isset($datog2["clan"]["stars"])){ echo $datog2["clan"]["stars"];} ?></td>
								</tr>
								<tr class="marcador">
									<td style="float :left;" >Ataques</td><td><?php if(isset($datog2["clan"]["attacks"])){ echo $datog2["clan"]["attacks"];} ?></td>
								</tr>
								<tr class="marcador">
									<td style="float :left; " >Destruccion</td><td><?php if(isset($datog2["clan"]["destructionPercentage"])){ echo $datog2["clan"]["destructionPercentage"]."%";} ?></td>
								</tr>
						    <?php } ?>
							</table>






							<table  cellpadding="0">
								<?php
								error_reporting(E_ERROR | E_PARSE); //poner solo los errores que quieres que muestre se puede sumar: E_ERROR | E_WARNING | E_PARSE | E_NOTICE
									foreach ($mienbrospk as $key1 => $row1) 
									{ $aux1[$key1] = $row1['mapPosition'];
									array_multisort($aux1, SORT_ASC, $mienbrospk);}
									//array_multisort($aux, SORT_ASC, $mienbrospk2);
									//	print_r($mienbrospk2);/* ordenar arrrays*/
								?>
					    		<?php
									foreach ($mienbrospk as $mienbropk) 
									{
								?>	
								
								
								<tr colspan="2"  ><td  style="height:170px;  " colspan="2"><?php $star = "starwar";  $star0 = "starwar0"; $star1 = "starwar1"; $star2 = "starwar2"; $star3 = "starwar3";if(isset($mienbropk ["bestOpponentAttack"]["stars"])){$estrellas = $mienbropk["bestOpponentAttack"]["stars"];
										 switch ($estrellas) {
										case "0":
                                           echo  '<img src="../images/iconos/'.$star0.'.png" ; />';
                                            break; 	
                                        case "1":
                                           echo  '<img src="../images/iconos/'.$star1.'.png" ; />';
                                            break;
                                        case "2":
                                           echo  '<img src="../images/iconos/'.$star2.'.png" ; />';
                                            break;
                                        case "3":
                                           echo  '<img src="../images/iconos/'.$star3.'.png" ; />';
                                            break;
                                        default:
                                        	echo  '<img src="../images/iconos/'.$star0.'.png" ; />';   
                                        }

									    
                                       
                                
                                    if(isset($mienbropk ["bestOpponentAttack"]["destructionPercentage"]))  { $porcentagek = $mienbropk ["bestOpponentAttack"]["destructionPercentage"];}
										if(isset($porcentagek)&& $porcentagek!==(100))  { echo " ".$porcentagek."%"; } } else{ echo  '<img src="../images/iconos/'.$star.'.png" ; />';}



										if(isset( $mienbropk["mapPosition"]))  { echo  "</br>".$mienbropk["mapPosition"]; } ?>.<?php if(isset( $mienbropk ["name"])){ echo $mienbropk ["name"]; } ?><br>
									<?php if (isset($mienbropk["townhallLevel"])){ $ayun = $mienbropk["townhallLevel"];} 
									$th11 = "th11"; 
									$th10 = "th10"; 
									$th9 = "th9"; 
									$th8 = "th8"; 
									$th7 = "th7";
									$th6 = "th6";
									$th5 = "th5";
									$th4 = "th4";
									$th3 = "th3";
									$th2 = "th2";
								    switch ($ayun) {
                                        case "11":
                                           echo '<img src="../images/th/'.$th11.'.png" />';
                                            break;
                                        case "10":
                                           echo '<img src="../images/th/'.$th10.'.png" />';
                                            break;
                                        case "9":
                                           echo '<img src="../images/th/'.$th9.'.png" />';
                                            break;
                                        case "8":
                                           echo '<img src="../images/th/'.$th8.'.png" />';
                                            break;
                                        case "7":
                                           echo '<img src="../images/th/'.$th7.'.png" />';
                                            break;
                                        case "6":
                                           echo '<img src="../images/th/'.$th6.'.png" />';
                                            break;
                                        case "5":
                                           echo '<img src="../images/th/'.$th5.'.png" />';
                                            break;
                                        case "4":
                                           echo '<img src="../images/th/'.$th4.'.png" />';
                                            break;
                                        case "3":
                                           echo '<img src="../images/th/'.$th3.'.png" />';
                                            break;
                                        case "2":
                                           echo '<img src="../images/th/'.$th2.'.png" />';
                                            break;    
                                        }
								    
								   ?>
								   </td>
								   <td >
								   
								   
								<table class="atacks0"  cellpadding="0" style=" width:105px; margin-left:-160px; margin-top:62px; position: relative;  ">
									<?php 
								   	if (isset($mienbropk["attacks"])){$nataque=count($mienbropk["attacks"]);
								   		$atack0="atack0";
								   		$atack1="atack1";
								   		$atack2="atack2";?>
									<tr  class="atacks"><td>
								   		<?php	
								   		switch ($nataque) {
                                        case "1":
                                            echo '<img src="../images/iconos/'.$atack1.'.png" />';
                                            break;
                                        case "2":
                                            echo '<img src="../images/iconos/'.$atack2.'.png" />';
                                            break;
                                        default:
                                        	echo '<img src="../images/iconos/'.$atack0.'.png" />';
                                        	}
                                     	?>
                                    </td></tr>
                                    <tr class="atacks2"><td>
                                    	<?php
                                     if(isset($mienbropk["attacks"])){ $ataque=$mienbropk["attacks"];
									foreach ($ataque as $mienpk){
											//echo $defensa;
											//echo $mienpk["attackerTag"];
											foreach ($mienbrospk2 as $mienbropk2){ 	
												//echo $mienbropk2["tag"];
												if (($mienpk["defenderTag"]==$mienbropk2["tag"])&&($mienbropk["tag"]==$mienpk["attackerTag"])){	echo " ".$mienbropk2["mapPosition"].".";
											}
												} 
											if(isset($mienpk["stars"])){ $ataques=$mienpk["stars"];}

												$ata0 = "ata0"; 
												$ata1 = "ata1"; 
												$ata2 = "ata2"; 
												$ata3 = "ata3";
												$ata = "ata";	
												switch ($ataques) {
                                       				case "0":
                                         				echo  '<img src="../images/iconos/'.$ata0.'.png" ; />';
                                         				if($nataque=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                           			break;
                                           			case "1":
                                         				echo  '<img src="../images/iconos/'.$ata1.'.png" ; />';
                                         				if($nataque=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                           			break;
                                       				case "2":
                                         				echo  '<img src="../images/iconos/'.$ata2.'.png" ; />';
                                         				if($nataque=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                          			break;
                                        			case "3":
                                           				echo  '<img src="../images/iconos/'.$ata3.'.png" ; />';
                                           				if($nataque=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                            			break;
                                            		default:
                                            			echo  '<img src="../images/iconos/'.$ata.'.png" ; />';
                                            			echo  '<img src="../images/iconos/'.$ata.'.png" ; />';
                                            			}
                                            	
                                            		}}}

                                            	?>
                                            </td></tr>
                                </table>
                               	<?php
											
								
								?></td>
								<?php 	} ?>
								</tr>	
								</tr>				
					    	</table>     
						</div><!--warp--> 
						
						
										
										
				
						
						<div class="warp">
							<table  >
								<?php if (isset($estadog2)&&($estadog2=='inWar')){
							 	?>
							 <tr>
									<td colspan="3"><?php if(isset($datog2["opponent"]["name"])){echo $datog2["opponent"]["name"];} ?> </td>
								</tr>
								<tr>
									<td  colspan="3" ><img src="<?php if(isset($datog2["opponent"]["badgeUrls"]["medium"])){echo $datog2["opponent"]["badgeUrls"]["medium"];} ?>"/><br><br></td>
								</tr >
								<tr class="marcador">
									<td style="float :left;" >estrellas  </td><td><?php if(isset($datog2["opponent"]["stars"])){ echo $datog2["opponent"]["stars"];} ?></td>
								</tr>
								<tr class="marcador">
									<td style="float :left;" >Ataques</td><td><?php if(isset($datog2["opponent"]["attacks"])){ echo $datog2["opponent"]["attacks"];} ?></td>
								</tr>
								<tr class="marcador">
									<td style="float :left; " >Destruccion</td><td><?php if(isset($datog2["opponent"]["destructionPercentage"])){ echo $datog2["opponent"]["destructionPercentage"]."%";} ?></td>
								</tr>
						    <?php } ?>
							</table>
							<table  cellpadding="0">
								<?php
								error_reporting(E_ERROR | E_PARSE); //poner solo los errores que quieres que muestre se puede sumar: E_ERROR | E_WARNING | E_PARSE | E_NOTICE
									foreach ($mienbrospk2 as $key2 => $row2) 
									{ $aux2[$key2] = $row2['mapPosition'];
									array_multisort($aux2, SORT_ASC, $mienbrospk2);}
									//array_multisort($aux, SORT_ASC, $mienbrospk2);
									//	print_r($mienbrospk2);/* ordenar arrrays*/
								?>
					    		<?php
									foreach ($mienbrospk2 as $mienbropk2) 
									{
								?>	
								<tr colspan="2"  ><td  style="height:170px;  " colspan="2"><?php  $star0 = "starwar0"; $star1 = "starwar1"; $star2 = "starwar2"; $star3 = "starwar3";if(isset($mienbropk2 ["bestOpponentAttack"]["stars"])){$estrellas2 = $mienbropk2 ["bestOpponentAttack"]["stars"];
									    switch ($estrellas2) {
                                        case "1":
                                           echo  '<img src="../images/iconos/'.$star1.'.png" ; />';
                                            break;
                                        case "2":
                                           echo  '<img src="../images/iconos/'.$star2.'.png" ; />';
                                            break;
                                        case "3":
                                           echo  '<img src="../images/iconos/'.$star3.'.png" ; />';
                                            break;
                                        default:
                                        	echo  '<img src="../images/iconos/'.$star0.'.png" ; />';   
                                        }
                                 
									
									
									 if(isset($mienbropk2 ["bestOpponentAttack"]["destructionPercentage"]))  { $porcentagek2 = $mienbropk2 ["bestOpponentAttack"]["destructionPercentage"];}
										if(isset($porcentagek2)&& $porcentagek2!==(100))  { echo " ".$porcentagek2."%"; } } else{ echo  '<img src="../images/iconos/'.$star.'.png" ; />';}
									
									
									
									
									if(isset( $mienbropk2["mapPosition"]))  { echo  "</br>".$mienbropk2["mapPosition"]; } ?>.<?php if(isset( $mienbropk2 ["name"])){ echo $mienbropk2 ["name"]; } ?><br>
									<?php if (isset($mienbropk2["townhallLevel"])){ $ayun = $mienbropk2["townhallLevel"];} 
									$th11 = "th11"; 
									$th10 = "th10"; 
									$th9 = "th9"; 
									$th8 = "th8"; 
									$th7 = "th7";
									$th6 = "th6";
									$th5 = "th5";
									$th4 = "th4";
									$th3 = "th3";
									$th2 = "th2";
								    switch ($ayun) {
                                        case "11":
                                           echo '<img src="../images/th/'.$th11.'.png" />';
                                            break;
                                        case "10":
                                           echo '<img src="../images/th/'.$th10.'.png" />';
                                            break;
                                        case "9":
                                           echo '<img src="../images/th/'.$th9.'.png" />';
                                            break;
                                        case "8":
                                           echo '<img src="../images/th/'.$th8.'.png" />';
                                            break;
                                        case "7":
                                           echo '<img src="../images/th/'.$th7.'.png" />';
                                            break;
                                        case "6":
                                           echo '<img src="../images/th/'.$th6.'.png" />';
                                            break;
                                        case "5":
                                           echo '<img src="../images/th/'.$th5.'.png" />';
                                            break;
                                        case "4":
                                           echo '<img src="../images/th/'.$th4.'.png" />';
                                            break;
                                        case "3":
                                           echo '<img src="../images/th/'.$th3.'.png" />';
                                            break;
                                        case "2":
                                           echo '<img src="../images/th/'.$th2.'.png" />';
                                            break;    
                                        }
								    
								   ?>
								   </td>
								   <td >
								   
								   	<?php	 
								   	?>
								<table  cellpadding="0" style=" width:105px; margin-left:-160px; margin-top:62px; position: relative; ">
									<?php 
								   	if (isset($mienbropk2["attacks"])){$nataque2=count($mienbropk2["attacks"]);
								   		$atack0="atack0";
								   		$atack1="atack1";
								   		$atack2="atack2";?>
									<tr  class="atacks"><td>
								   		<?php	
								   		switch ($nataque2) {
                                        case "1":
                                            echo '<img src="../images/iconos/'.$atack1.'.png" />';
                                            break;
                                        case "2":
                                            echo '<img src="../images/iconos/'.$atack2.'.png" />';
                                            break;
                                        default:
                                        	echo '<img src="../images/iconos/'.$atack0.'.png" />';
                                        	}
                                     	?>
                                    </td></tr>
                                    <tr class="atacks2"><td>
                                    	<?php
                                     if(isset($mienbropk2["attacks"])){ $ataque2=$mienbropk2["attacks"];
									foreach ($ataque2 as $mienpk2){
											//echo $defensa;
											//echo $mienpk["attackerTag"];
											foreach ($mienbrospk as $mienbropk){ 	
												//echo $mienbropk2["tag"];
												if (($mienpk2["defenderTag"]==$mienbropk["tag"])&&($mienbropk2["tag"]==$mienpk2["attackerTag"])){	echo " ".$mienbropk["mapPosition"].".";}
												} 
											if(isset($mienpk2["stars"])){ $defensa2=$mienpk2["stars"];}
												$ata0 = "ata0"; 
												$ata1 = "ata1"; 
												$ata2 = "ata2"; 
												$ata3 = "ata3";
												$ata = "ata";	
												switch ($defensa2) {
                                       				case "0":
                                         				echo  '<img src="../images/iconos/'.$ata0.'.png" ; />';
                                         				if($nataque2=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                           			break;
                                           			case "1":
                                         				echo  '<img src="../images/iconos/'.$ata1.'.png" ; />';
                                         				if($nataque2=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                           			break;
                                       				case "2":
                                         				echo  '<img src="../images/iconos/'.$ata2.'.png" ; />';
                                         				if($nataque2=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                          			break;
                                        			case "3":
                                           				echo  '<img src="../images/iconos/'.$ata3.'.png" ; />';
                                           				if($nataque2=='1'){ echo  '<img src="../images/iconos/'.$ata.'.png" ; />';}
                                            			break;
                                            		default:
                                            			echo  '<img src="../images/iconos/'.$ata.'.png" ; />';
                                            			echo  '<img src="../images/iconos/'.$ata.'.png" ; />';
                                            			}
                                            	}}}
                                            	?>
                                            </td></tr>
                                </table>
                               	<?php
											
								
								?></td>
								<?php 	} ?>
								</tr>	
								</tr>				
					    	</table>     
						</div><!--warp--> 
					</div><br><!--guerra-->  
			</div><br>	<!--guerrae-->
   
 	








			<img src="../images/imagenes/bottomcentral.png" alt="" />

		</div>	<!--centro2-->	

	</div>	<!--main2-->	

			

	

	

</div>		



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

		

	</div>

	</body>

</html>


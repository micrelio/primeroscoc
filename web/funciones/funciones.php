

<!-- var_dump($datocg); para ver lo que devuelve un array -->
<!-- PRIMEROS:#8VVJCY9R-->

<?php
	$clantag = "#8VVJCY9R";
	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg";
	$url = "https://api.clashofclans.com/v1/clans/" . urlencode($clantag);
	$ch = curl_init($url);
	$headr = array();
	$headr[] = "Accept: application/json";
	$headr[] = "Authorization: Bearer ".$token;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$res = curl_exec($ch);
	$datop = json_decode($res, true);
	curl_close($ch);
	if (isset($datop["reason"])) {
		$errormsg = true;
		}
	?>	 





<!-- PRIMEROS GUERRA ACTUAL-->

 <?php
// Replace with the token you get from the site, see more at http://jwt.io
	$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg';
	//Use the first url to test your Server's IP adress and cURL function
	$url = 'https://ifconfig.io';
	$url = 'https://api.clashofclans.com/v1/clans/%238VVJCY9R/currentwar'/*https://api.clashofclans.com/v1/currentwar*/;
	$ch = curl_init(htmlspecialchars($url));
	$headr = array();
	$headr[] = 'Accept: application/json';
	$headr[] = 'Authorization: Bearer '.$accesstoken;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$execute = curl_exec($ch);
	//var_dump($execute);
	$res = curl_exec($ch);
	$datog = json_decode($res, true);
	curl_close($ch);
	if (isset($datog["reason"])) {
		$errormsg = true;
		}
	
	//echo $datog[""];
	// no se porque da error ahora $ataquesp = $mienbrosp["attacks"];
?> 


<!-- PRIMEROS REGISTRO GUERRA-->
<?php
	// Replace with the token you get from the site, see more at http://jwt.io
	$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg';
	//Use the first url to test your Server's IP adress and cURL function
	$url = 'https://ifconfig.io';
	$url = 'https://api.clashofclans.com/v1/clans/%238VVJCY9R/warlog'/*?limit=20 para el limite de gerras mostradas*/;
	$ch = curl_init(htmlspecialchars($url));
	$headr = array();
	$headr[] = 'Accept: application/json';
	$headr[] = 'Authorization: Bearer '.$accesstoken;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//$execute = curl_exec($ch);
	//var_dump($execute);
	$res = curl_exec($ch);
	$datocg = json_decode($res, true);
	curl_close($ch);
	if (isset($datocg["reason"])) {
	$errormsg = true;
	}
	//$mienbrose = $datocg["opponent"]["members"];
	//echo $datocg[""];
?> 



<!-- PEKEPRIMEROS :#RCOLLOQ8-->		 
<?php
	$clantag = "#RCOLLOQ8";
	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg";
	$url = "https://api.clashofclans.com/v1/clans/" . urlencode($clantag);
	$ch = curl_init($url);
	$headr = array();
	$headr[] = "Accept: application/json";
	$headr[] = "Authorization: Bearer ".$token;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$res = curl_exec($ch);
	$dato2 = json_decode($res, true);
	curl_close($ch);
	if (isset($dato2["reason"])) {
	$errormsg = true;
	}
	
	if(isset($dato2["memberList"])){$mienbros2 = $dato2["memberList"];}
?>

<!-- PEKEPRIMEROS GUERRA ACTUAL-->	
<?php
	
	date_default_timezone_set('Europe/Amsterdam');
	// Replace with the token you get from the site, see more at http://jwt.io
	$accesstoken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjM2NmJhZTg3LWIyNWItNGE4Zi05ZTRhLWJjODRiMzY3ZTUyNiIsImlhdCI6MTYwMTEzODc0MSwic3ViIjoiZGV2ZWxvcGVyLzc1YTAzMTdhLThkYWItMmQ2OC04Mzk1LWFiMmE2NTk5NmQyMyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIxMy4xNjIuMjAwLjIyNiJdLCJ0eXBlIjoiY2xpZW50In1dfQ.TYIG6bhiKtXet9GKH2Qq1oG0EPIbbmibUnOXeqw7Wbw4wgtYk446JfjdcxCsRyaYYHe_fFaSiHcaT0C6sLK3dg';
	//Use the first url to test your Server's IP adress and cURL function
	$url = 'https://ifconfig.io';
	$url = 'https://api.clashofclans.com/v1/clans/%23RCOLLOQ8/currentwar'/*https://api.clashofclans.com/v1/currentwar*/;
	$ch = curl_init(htmlspecialchars($url));
	$headr = array();
	$headr[] = 'Accept: application/json';
	$headr[] = 'Authorization: Bearer '.$accesstoken;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$execute = curl_exec($ch);
	//var_dump($execute);
	$res = curl_exec($ch);
	$datog2 = json_decode($res, true);
	curl_close($ch);
	if (isset($datog2["reason"])) {
		$errormsg = true;}
	 
	 
	//echo $datog2[""];
	// no se porque da error ahora $ataquespk = $datog2["clan"]["members"]["attacks"];

?> 


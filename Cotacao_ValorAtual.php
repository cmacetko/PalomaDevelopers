<?
header("Content-Type: text/html; charset=UTF-8",true);

$curl 						= curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL 				=> "http://api.developers.palomatec.xyz/cotacao/dolar/",
CURLOPT_RETURNTRANSFER 		=> true,
CURLOPT_HTTPHEADER 			=> array(
							"Api-Key: XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
							),
));

$response 				= json_decode(curl_exec($curl), true);
$httpcode				= curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

if( $httpcode == 200 )
{

	echo "Resultdo:";
	echo "<br>";
	echo "<br>";
	
	var_dump($response);

}else{
	
	echo "Eroo:";
	echo "<br>";
	echo "<br>";
	
	echo $httpcode . ": " . $response["Mensagem"];

}
?>
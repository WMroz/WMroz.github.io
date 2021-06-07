<?php
$json_cities = file_get_contents("cities.json");
$cities = json_decode($json_cities, true);
$searchSet = $_GET;
$searchFor=$searchSet['name'];
#var_dump($searchFor);

foreach($cities as $city){
	#echo 'city name: ' . $city['name'] . '<br />';
	$name=$city['name'];
	$li = stripos($name, $searchFor);

	if($li !== false){
		$json_str=(json_encode($city));
		$wynik=$json_str."<br/>";
		echo $wynik;
	}

}

?>
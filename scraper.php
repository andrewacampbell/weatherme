<?php 
	
	$city = $_GET['city'];

	$city = str_replace(" ", "", $cit);
	$output = file_get_contents("http://www.weather-forecast.com/locations/$city/forecasts/latest");

	preg_match('/3 Day Weather Forcast Summary:<\/b>
				<span class="phrase">(.*?)</s', $output, $matches);

	echo $matches[1];

?>
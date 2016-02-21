<?php 

	try{

		//$city = $_GET['city'];

		//$city = str_replace(" ", "", $city);
		
		//$url = urlencode("http://www.weather-forecast.com/locations/paris/forecasts/latest");
		//$url = urlencode($url);
		//$output = file_get_contents($url);

		$output = file_get_contents("http://www.weather-forecast.com/locations/paris/forecasts/latest");

		preg_match('/3 Day Weather Forecast Summary:<\/b>(.*?)<\/p/', $output, $matches);
   
		// preg_match('/3 Day Weather Forecast Summary:<\/b>
		//  <span class="phrase">(.*?)</s', $output, $matches);

		print_r($matches[1]);

	}catch(Exception $ex) {

		echo "Error is ", $ex->getMessage();
	}


?>
<?php

// $countries = array();
// $countries["US"] = "United States";
// $countries["DE"] = ;

$countries = array();
$countries[0] = array(
	"code" => "US",
	"name" => "United States",
	"capital" = "Washington, D. C.",
 	"population" = 225000000,
    "anthem"] = "The Star-Spangled Banner"
	);
$countries[1] = array(
	"code" => "DE",
	"name" => "Germany",
	"capital" = "Berlin",
 	"population" = 8179960,
    "anthem"] = "Song of the Germans"
	);
	 
?>
<?php foreach($countries as $country) { ?> 
	<h1><?php echo $country["name"]; ?></h1>
	<dl>
		<dt>Country Code</dt>
		<dd><?php echo $country["code"]; ?></dd>
		<dt>Population</dt>
		<dd><?php echo $country["population"]; ?></dd>
	</dl>
 <?php } ?>


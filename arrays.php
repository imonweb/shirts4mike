<?php

$flavors = array("Vanilla", "Chocolate","Strawberry");



?> <pre>
<?php echo "We have " . count($flavors) . "flavors available . Here's a list:" ."\n" ; 

foreach($flavors as $flavor){
	echo $flavor . "\n";

}
?>

</pre>
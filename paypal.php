<pre> <?php

echo $product_id . "\n";
var_dump($product);

?></pre>
 
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
<table>
<tr>
	<th>
		<input type="hidden" name="on0" value="Size">
		<label for="os0">Size</label>
	</th>
	<td>

	<!-- <select name="os0">
		<option value="Small">Small</option>
		<option value="Medium">Medium</option>
		<option value="Large">Large</option>
		<option value="X-Large">X-Large</option>
	</select> -->

	<select name="os0" id="os0">
		<?php foreach($product["sizes"] as $size) { ?>
		<option value="<?php echo $size; ?>"><?php echo $size; ?></option>
	    <?php } ?> 
	</select>  

	</td><tr> 
</table>
<input type="hidden" name="currency_code" value="GBP">
<input type="submit"  value="Add to Cart" name="submit">
</form>


<!-- <?php
// $flavors = array();

// $flavors[1] = "Cake Batter";

// $flavors[2] = "Cookie Dough";

// if (isset($_GET["id"])) {

//     if (isset($flavors[$_GET["id"]])) {

//         echo $flavors[$_GET["id"]];

//     } else {

//         echo "B";

//     }

// } else {

//     echo "A";

// }

 // $flavors = array();
 // $lafovrs[1] = "Cake Batter";
 // $flavors[2] = "Cookie Dough";
 // $x = 2;
 // if ($flavors[$x] != "Cookie Dough"){
 // 	echo "A";
 // } else {
 // 	echo "B";
 // }

// $flavors = array();

// $flavors[1] = "Cake Batter";

// $flavors[2] = "Cookie Dough";

// if (isset($_GET["id"])) {

//     if (isset($flavors[$_GET["id"]])) {

//         echo $flavors[$_GET["id"]];

//     } else {

//         echo "B";

//     }

// } else {

//     echo "A";

// }
// ?>
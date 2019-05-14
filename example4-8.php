<?php 
$meal = array(
	'breakfast' => 'Walnut Bun',
	'lunch'     => 'Cashew Nuts and White Mushrooms',
	'snack'     => 'Dried Mulberries',
	'dinner'    => 'Eggplant with Chili Sauce'
);
echo "<table>";
foreach ( $meal as $key => $value ) {
	echo "<tr><td>$key</td> <td>$value</td></tr>";
}
echo "</table>";
 ?>
<?php 
// Create $lunch array with two elements
// This sets $lunch[0]
$lunch[] = 'Dried Mushrooms in Brown Sauce'; 
// This sets $lunch[1]
$lunch[] = 'Pineapple and Yu Fungus';
// Create $dinner with three elements
$dinner = array('Sweet Corn and Asparagus', 'Lemon Chicken', 'Braised Bamboo Fungus');
// Add an element to the end of $dinner
// This sets $dinner[3]
echo "For Lunch <br>";
$dinner[] = 'Flank Skin with Spiced Flavor';
foreach ( $lunch as $key => $value ) {
	echo "$value <br>";
}
echo "For Dinner <br>";
foreach ( $dinner as $key => $value ) {
	echo "$value <br>";
}
?>

<?php 
$pop = [ 
	['New York', 'NY', 8175133],
	['Los Angeles', 'CA' , 3792621],
	['Chicago', 'IL' , 2695598],
	['Houston', 'TX' , 2100263],
	['Philadelphia', 'PA' , 1526006],
	['Phoenix', 'AZ' , 1445632],
	['San Antonio', 'TX' , 1327407],
	['San Diego', 'CA' , 1307402],
	['Dallas', 'TX' , 1197816],
    ['San Jose', 'CA' , 945942] 
];
echo "<table>";
echo "<tr><th>City</th> <th>Population</th></tr>";
$total = 0;
$state_totals = array();
foreach ( $pop as $city_info ) {
	$total += $city_info[2];
	if ( ! array_key_exists( $city_info[1], $state_totals ) ) {
        $state_totals[ $city_info[1] ] = 0;
    }
	$state_totals[ $city_info[1] ] += $city_info[2]; 
	echo "<tr><td>$city_info[0], $city_info[1]</td><td>$city_info[2]</td></tr><br>";
}
echo "<tr><td>Total</td><td>$total</td></tr><br>"; 
foreach ($state_totals as $state => $population) {
	echo "<tr><td>$state</td> <td>$population</td></tr><br>"; }
	echo "</table>";
?>

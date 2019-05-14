<?php 
$pop = array(
	'New York, NY'     => 8175133, 
	'Los Angeles, CA'  => 3792621, 
	'Chicago, IL'      => 2695598, 
	'Houston, TX'      => 2100263, 
	'Philadelphia, PA' => 1526006, 
	'Phoenix, AZ'      => 1445632, 
	'San Antonio, TX'  => 1327407, 
	'San Diego, CA'    => 1307402, 
	'Dallas, TX'       => 1197816, 
	'San Jose, CA'     => 945942
);
$total = array_sum( $pop );
// print original array
echo "Before sorting: <br>";
echo "<table><tr><th>Locations</th> <th>Populations</th> </tr> ";
foreach ( $pop as $location => $population ) {
	echo "<tr><td>$location</td> <td>". number_format( $population ) . "</td> </tr>";
}
echo "<tr><td> Total </td><td>". number_format( $total ) . "</td></tr>";
echo "</table><br>";
// print after sorting by population
asort( $pop );
echo "After Sorting by population: <br>";
echo "<table><tr><th>Locations</th> <th>Populations</th></tr> ";
foreach ( $pop as $location => $population ) {
	echo "<tr><td>$location</td> <td>". number_format( $population ) ."</td></tr>";
}
echo "<tr><td>Total</td> <td>". number_format($total) ."</td></tr>";
echo "</table><br><br>";
// print after sorting by location
ksort($pop);
echo "After Sorting by city name: <br>";
echo "<table> <tr> <th>Locations</th> <th>Populations</th></tr> ";
foreach ( $pop as $location => $population ) {
	echo "<tr><td>$location</td> <td>$population</td> </tr>";
}
echo "<tr><td> Total </td><td>". number_format($total) ."</td></tr>";
echo "</table><br>";
?>

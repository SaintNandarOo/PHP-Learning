<?php 
$pop = array ('New York' => 8175133, 
					'Los Angeles' => 3792621,
					'Chicago' => 2695598,
					'Houston' => 2100263,
					'Philadelphia' => 1526006,
					'Phoenix' => 1445632,
					'San Antonio' => 1327407,
					'San Diego' => 1307402,
					'Dallas' => 1197816,
					'San Jose' => 945942);
asort($pop);
echo "Sorting by popluation <br>";
	echo "<table> <tr> <td>Locations</td> <td>Populations</td> </tr> ";
	$total=0;
	foreach ($pop as $location => $population) {
		echo "<tr><td>$location</td> <td>$population</td> </tr>";
		$total+=$population;
	}
	echo "<tr> <td> Total </td> <td> $total </td> </tr>";
	echo "</table><br><br>";

ksort($pop);
echo "Sorting by city name <br>";
	echo "<table> <tr> <td>Locations</td> <td>Populations</td> </tr> ";
	$total=0;
	foreach ($pop as $location => $population) {
		echo "<tr><td>$location</td> <td>$population</td> </tr>";
		$total+=$population;
	}
	echo "<tr> <td> Total </td> <td> $total </td> </tr>";
	echo "</table><br>";
 ?>
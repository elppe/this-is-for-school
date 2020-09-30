<?php

$a = 1;
$b = 1;
$kolonner = 2;
$rader = 42;

echo "<table> <tr> ";

while ($a <= $kolonner) {
	echo "<th> Kollone </th>";
	$a = $a + 1;


}

echo "</tr><tr>";

while ($b <= $rader) {
	echo "<td> Rad </td>";
	echo "<td> Rad </td>";
	$b = $b + 1;
echo "</tr>";
}

echo "</table>";

?>

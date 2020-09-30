<?php

$kolonner = 1;
$rad = 1;
$maxrad = 24; //velg hvor mange rader du vil ha


//setter opp starten til tabbelen
if ($kolonner == 1) {
	echo "
	<table>
		<tr>";

}

//setter opp kollonene
while ($kolonner <= 2) {
		echo "
			<th> kollonne </th>";
		$kolonner = $kolonner + 1;
}

//avslutter kollonnene
if ($kolonner == 2) {
	echo "
		</tr>";
	$kolonner = $kolonner + 1;

}

//sjekker om $rad er mindre en $maxrad, vis ja så lag en ny rad
while ($rad <= $maxrad) {
		echo "
		<tr>
			<td> $rad.  rad </td>
			<td> rad </td>
		</tr>";
		$rad = $rad + 1;
}

//sjekker om rad = maxrad og avslutter tabbelen om ja
if ($rad == $maxrad) {
	echo "
			</table>
		";

	$rad = $rad + 1;
}

?>

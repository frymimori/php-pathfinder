<?php
	require_once("src/avolitty-pathfinder.php");
	$a = 15;
	$b = 11;
	$c = array(
		"1", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "7", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "7", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "7", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "7", "0", "0", "0", "0", "0",
		"0", "0", "0", "7", "7", "7", "0", "7", "0", "0", "0",
		"0", "0", "0", "7", "0", "7", "7", "7", "0", "0", "0",
		"0", "0", "0", "7", "0", "7", "0", "0", "0", "0", "0",
		"0", "7", "7", "7", "7", "7", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
		"7", "7", "7", "7", "7", "0", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
		"0", "2", "0", "0", "0", "0", "0", "0", "0", "0", "0",
		"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0"
	);
	$c = AvolittyPathfinderA($a, $b, $c);
	$a *= $b;
	$d = 0;

	while ($a != $d) {
		echo " " . $c[0][$d];

		if (($d + 1) % $b == 0) {
			echo "\n";
		}

		$d++;
	}

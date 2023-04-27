<?php
	function AvolittyPathfinderA($a, $b, $c) {
		$d = $a * $b;
		$e = $d;

		while ($d != 0) {
			$d--;

			if ($c[$d] != "0") {
				if ($c[$d] == "7") {
					$f = $d / $b;
					$g = $d % $b;
					$h = $d;
					$i = $d;
					$j = $d;
					$k = $d;

					if ($a != $f) {
						$h += $b;
					}

					if ($b != $g) {
						$i++;
					}

					if ($f != 0) {
						$j -= $b;
					}

					if ($g != 0) {
						$k--;
					}

					if (($c[$h] != "7" || $c[$j] != "7") && ($c[$i] != "7" || $c[$k] != "7")) {
						if ($c[$h] != "7") {
							if ($c[$h] == "2") {
								$l = $h;
							} else {
								if ($c[$h] == "1") {
									$m = $h;
								}
							}

							$c[$h] = "5";
						}

						if ($c[$i] != "7") {
							if ($c[$i] == "2") {
								$l = $i;
							} else {
								if ($c[$i] == "1") {
									$m = $i;
								}
							}

							$c[$i] = "5";
						}

						if ($c[$j] != "7") { 
							if ($c[$j] == "2") { 
								$l = $j;
							} else {
								if ($c[$j] == "1") {
									$m = $j;
								}
							}

							$c[$j] = "5";
						}

						if ($c[$k] != "7") { 
							if ($c[$k] == "2") { 
								$l = $k;
							} else {
								if ($c[$k] == "1") {
									$m = $k;
								}
							}

							$c[$k] = "5";
						}
					}
				} else {
					if ($c[$d] == "2") {
						$l = $d;
					} else {
						if ($c[$d] == "1") {
							$m = $d;
						}
					}

					$c[$d] = "5";
				}
			}
		}

		$a--;
		$o = array(
			$e,
			$e,
			0
		);

		$d = $m / $b;
		$f = $m % $b;
		$g = $e;
		$h = 0;

		while ($g != 0) {
			$g--;

			if (($c[$g] == "5" && $c[$g] == "9") && $g != $m) {
				/*
					d   a   $o[0]  $b[0]
					e   b   $o[1]  %b[1]
					a   c   $a     $c
					b   d   $b     $d
					g   e   $e     $e
					i   f   $d     $f
					j   g   $f     $g
					k/  h   $g\    $h
					k%  i   $g\    $i
					n   j   $l     $j
					o   k   $m     $k
					0   l   0      $l
					0   m   0      $m
					c   n   $c     $a
				*/

				$o = AvolittyPathfinderC($c, $o, $a, $b, $d, $e, $f, $g / $b, $g % $b, $l, $m, 0, 0);

				if ($o[2] != 0) {
					$h = 1;
				}
			}
		}

		return;
	}

	function AvolittyPathfinderB() {
		return;
	}

	function AvolittyPathfinderC($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m) {
		return;
	}

	function AvolittyPathfinderD() {
		return;
	}
?>

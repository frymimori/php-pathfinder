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

		/*
		$d = 0;

		while ($d != $e) {
			echo " " . $c[$d];

			if (($d + 1) % $b == 0) {
				echo "\n";
			}

			$d++;
		}
		*/

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
					e   b   $o[1]  $b[1]
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

				$o = AvolittyPathfinderC($c, $o, $a, $b, $d, $e, $f, $g / $b, $g % $b, $l, $m, 0, 0);

				if ($o[2] != 0) {
					$h = 1;
				}
				*/
			}
		}

		return;
	}

	function AvolittyPathfinderB() {
		return;
	}

	function AvolittyPathfinderC($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m) {
		/*
			a  $b[0]
			b  $b[1]
			c  $c
			d  $d
			e  $e
			f  $f
			g  $g
			h  $h
			i  $i
			j  $j
			k  $k
			l  $l
			m  $m
			n  $a
			o  o
			p  p
			q  q
			w  r
			r  s
		*/
		$o = $k;
		$p = 0;
		$q = 0;
		$r = ($f <= $h) + ($f == $h);
		$l++;

		if ($g < $i) {
			$r += 4;
		} else {
			if ($g == $i) {
				$r += 8;
			}
		}

		if (($r & 1) == 0 && $r != 6) {
			if ($r == 2 || $r == 8) {
				if ($r == 2) {
					$g--;
					$k--;

					while (($a[$k] == "0" || $a[$k] == "4") && $g != $i) {
						if ($a[$k] == "0") {
							$a[$k] = "8";
						} else {
							$a[$k] = "12";
						}

						$g--;
						$k--;
						$l++;
					}

					$r = 0;

					if ($b[0] >= $l) {
						if ($j != $k) {
							if ($f == $h && $g == $i) {
								$m++;
								$h = $c;
								$i = $d;
								$s = $e;
								$v = $a[$k];
								$a[$k] = "6";

								while ($s != 0) {
									$s--;

									if ($i == 0) {
										$h--;
										$i = $d;
									}

									$i--;

									if (($a[$s] == "5" || $a[$s] == "9") && ($f != $h || $g != $i)) {
										$q = AvolittyPathfinderC($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);

										if ($q != 0) {
											$p = $q;
										}
									}
								}

								if ($p == 0) {
									$a[$k] = $v;
								} else {
									$a[$k] = "9";
								}
							}
						} else {
							if ($b[0] != $l || $b[1] > $m) {
								$p = $l;
								$s = $k + 1;
								$r = 1;
							}
						}
					}

					$g++;
					$k++;

					if ($r == 0) {
						if ($p == 0) {
							while ($k != $o) {
								if ($a[$k] == "8") {
									$a[$k] = "0";
								} else {
									$a[$k] = "4";
								}

								$g++;
								$k++;
							}
						} else {
							while ($k != $o) {
								$a[$k] = "4";
								$g++;
								$k++;
							}
						}
					} else {
						while ($k != $o) {
							$a[$k] = "8";
							$g++;
							$k++;
						}
					}
				} else {
					$f--;
					$k -= $d;

					while (($a[$k] == "0" || $a[$k] == "4") && $f != $h) {
						if ($a[$k] == "0") {
							$a[$k] = "8";
						} else {
							$a[$k] = "12";
						}

						$f--;
						$k -= $d;
						$l++;
					}

					$r = 0;

					if ($b[0] >= $l) {
						if ($j != $k) {
							if ($f == $h && $g == $i) {
								$h = $c;
								$i = $d;
								$m++;
								$s = $e;
								$v = $a[$k];
								$a[$k] = "6";

								while ($s != 0) {
									$s--;

									if ($i == 0) {
										$h--;
										$i = $d;
									}

									$i--;

									if (($a[$s] == "5" || $a[$s] == "9") && ($f != $h || $g != $i)) {
										$q = AvolittyPathfinderC($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);

										if ($q != 0) {
											$p = $q;
										}
									}
								}

								if ($p == 0) {
									$a[$k] = $v;
								} else {
									$a[$k] = "9";
								}
							}
						} else {
							if ($b[0] != $l || $b[1] > $m) {
								$p = $l;
								$r = 1;
								$s = $d + $k;
							}
						}
					}

					$f++;
					$k += $d;

					if ($r == 0) {
						if ($p == 0) {
							while ($k != $o) {
								if ($a[$k] == "8") {
									$a[$k] = "0";
								} else {
									$a[$k] = "4";
								}

								$f++;
								$k += $d;
							}
						} else {
							while ($k != $o) {
								$a[$k] = "4";
								$f++;
								$k += $d;
							}
						}
					} else {
						while ($k != $o) {
							$a[$k] = "8";
							$f++;
							$k += $d;
						}
					}
				}
			} else {
				$f--;

				if ($r == 4) {
					$g++;
					$t = $d - 1;
					$k -= $t;

					while (($a[$k] == "0" || $a[$k] == "4") && $f != $h && $g != $i) {
						if ($a[$k] == "0") {
							$a[$k] = "8";
						} else {
							$a[$k] = "12";
						}

						$f--;
						$g++;
						$k -= $t;
						$l++;
					}

					$r = 0;

					if ($b[0] >= $l) {
						if ($a[$k] == "0" || $a[$k] == "4") {
							if ($a[$k] == "0") {
								$a[$k] = "8";
							} else {
								$a[$k] = "12";
							}

							$l++;
							$u = $k;

							if ($f == $h) {
								$g++;
								$k++;

								while (($a[$k] == "0" || $a[$k] == "4") && $g != $i) {
									if ($a[$k] == "0") {
										$a[$k] = "8";
									} else {
										$a[$k] = "12";
									}

									$g++;
									$k++;
									$l++;
								}

								if ($b[0] >= $l && $f == $h && $g == $i && ($a[$k] == "5" || $a[$k] == "9")) {
									if ($j != $k) {
										$h = $c;
										$i = $d;
										$m++;
										$s = $e;
										$v = $a[$k];
										$a[$k] = "6";

										while ($s != 0) {
											$s--;

											if ($i == 0) {
												$h--;
												$i = $d;
											}

											$i--;

											if (($a[$s] == "5" || $a[$s] == "9") && ($f != $h || $g != $i)) {
												$q = AvolittyPathfinderC($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);

												if ($q != 0) {
													$p = $q;
												}
											}
										}

										if ($p == 0) {
											$a[$k] = $v;
										} else {
											$a[$k] = "9";
										}
									} else {
										if ($b[0] != $l || $b[1] > $m) {
											$p = $l;
											$r = 1;
											$s = $k - 1;
										}
									}

									$g--;
									$k--;

									if ($r == 0) {
										if ($p == 0) {
											while ($k != $u) {
												if ($a[$k] == "8") {
													$a[$k] = "0";
												} else {
													$a[$k] = "4";
												}

												$g--;
												$k--;
											}

											if ($a[$k] == "8") {
												$a[$k] = "0";
											} else {
												$a[$k] = "4";
											}
										} else {
											while ($k != $u) {
												$a[$k] = "4";
												$g--;
												$k--;
											}

											$a[$k] = "4";
										}
									} else {
										while ($k != $u) {
											$a[$k] = "8";
											$g++;
											$k++;
										}

										$a[$k] = "8";
									}
								} else {
									$g++;
									$k++;

									while ($k != $s) {
										if ($a[$k] == "8") {
											$a[$k] = "0";
										} else {
											$a[$k] = "4";
										}

										$g++;
										$k++;
									}

									if ($a[$k] == "8") {
										$a[$k] = "0";
									} else {
										$a[$k] = "4";
									}
								}
							} else {
								$f--;
								$k -= $d;

								while (($a[$k] == "0" || $a[$k] == "4") $f != $h) {
									if ($a[$k] == "0") {
										$a[$k] = "8";
									} else {
										$a[$k] = "12";
									}

									$f--;
									$k -= $d;
									$l++;
								}

								if ($b[0] >= $l && $f == $h && $g == $i && ($a[$k] == "5" || %a[$k] == "9")) {
									if ($j != $k) {
										$h = $c;
										$i = $d;
										$m++;
										$s = $e;
										$v = $a[$k];
										$a[$k] = "6";

										while ($s != 0) {
											$s--;

											if ($i == 0) {
												$h--;
												$i = $d;
											}

											$i--;

											if (($a[$s] == "5" || $a[$s] == "9") && ($f != $h || $g != $i)) {
												$q = AvolittyPathfinderC($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);

												if ($q != 0) {
													$p = $q;
												}
											}
										}

										if ($p == 0) {
											$a[$k] = $v;
										} else {
											$a[$k] = 9;
										}
									} else {
										if ($b[0] != $l || $b[1] > $m) {
											$p = $l;
											$r = 1;
											$s = $d + $k;
										}
									}

									$f++;
									$k += $d;

									if ($r == 0) {
										if ($p == 0) {
											while ($k != $u) {
												if ($a[$k] == "8") {
													$a[$k] = "0";
												} else {
													$a[$k] = "4";
												}

												$f++;
												$k += $d;
											}

											if ($a[$k] == "8") {
												$a[$k] = "0";
											} else {
												$a[$k] = "4";
											}
										} else {
											while ($k != $u) {
												$a[$k] = "4";
												$f++;
												$k += $d;
											}

											$a[$k] = "4";
										}
									} else {
										while ($k != $u) {
											$a[$k] = "8";
											$f++;
											$k += $d;
										}

										$a[$k] = "8";
									}
								} else {
									$f++;
									$k += $d;

									while ($k != $u) {
										if ($a[$k] == "8") {
											$a[$k] = "0";
										} else {
											$a[$k] = "4";
										}

										$f++;
										$k += $d;
									}

									if ($a[$k] == "8") {
										$a[$k] = "0";
									} else {
										$a[$k] = "4";
									}
								}
							}
						} else {
							if ($j != $k) {
								if ($f == $h && $g == $i && ($a[$k] == "5" || $a[$k] == "9")) {
									$h = $c;
									$i = $d;
									$m++;
									$s = $e;
									$v = $a[$k];
									$a[$k] = "6";

									while ($s != 0) {
										$s--;

										if ($i == 0) {
											$h--;
											$i = $d;
										}

										$i--;

										if (($a[$k] == "5" || $a[$k] == "9") && ($f != $h || $g != $i)) {
											$q = AvolittyPathfinderC($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n);

											if ($q != 0) {
												$p = $q;
											}
										}
									}

									if ($p == 0) {
										$a[$k] = $v;
									} else {
										$a[$k] = "9";
									}
								}
							} else {
								if ($b[0] != $l || $b[1] > $m) {
									$p = $l;
									$r = 1;
									$s = $k + $t;
								}
							}
						}
					}

					$f++;
					$g--;
					$k += $t;

					if ($r == 0) {
						if ($p = 0) {
							while ($k != $o) {
								if ($a[$k] == "8") {
									$a[$k] = "0";
								} else {
									$a[$k] = "4";
								}

								$f++;
								$g--;
								$k += $t;
							}
						} else {
							while ($k != $o) {
								$a[$k] = "4";
								$f++;
								$g--;
								$k += $t;
							}
						}
					} else {
						while ($k != $o) {
							$a[$k] = "8";
							$f++;
							$g--;
							$k += $t;
						}
					}
				} else {
					
				}
			}
		}

		return;
	}

	/*
		a  $b[0]
		b  $b[1]
		c  $c
		d  $d
		e  $e
		f  $f
		g  $g
		h  $h
		i  $i
		j  $j
		k  $k
		l  $l
		m  $m
		n  $a
		o  $o
		p  $p
		q  $q
		w  $r
		r  $s
		t  $t
		v  $v
		s  $u
	*/

	function AvolittyPathfinderD() {
		return;
	}
?>

<?php

require 'Point.php';

$p1 = new Point(10, 20);
$p2 = new Point(10, 20);

if ($p1 == $p2) {
	echo 'p1 and p2 are equal.';
} else {
	echo 'p1 and p2 are not equal.';
}
?>
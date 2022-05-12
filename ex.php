<?php

$a = 34;
$b = 34;

// Return a message if two operands are
// equal with same data type operands
if($a === $b){
	echo "Equal";
}
else{
	echo "not Equal";
}

echo "\n";

// Return a message if two operands are equal
// with different data type operands
// First is of string type and the second
// is if integer type
if('34' === 34){
	echo "Equal";
}
else{
	echo "not Equal";
}

?>

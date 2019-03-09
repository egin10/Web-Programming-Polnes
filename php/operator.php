<?php
$x = 3; //integer
$y = "5"; //string
// $x += $y; //x = x + y

echo $x."<br>";

// echo $x." == ".$y."<br>";
// if($x == $y) {
// 	echo "Sama";
// }else{
// 	echo "Beda";
// }
var_dump($x == $y);echo "<br>";
var_dump($x != $y);echo "<br>";
var_dump($x <> $y);echo "<br>";
var_dump($x === $y);echo "<br>";
var_dump($x !== $y);echo "<br>";

echo $x++; echo "<br>"; // $x = $x + 1
echo ++$x; echo "<br>"; // 1 + $x = $x
echo $y--; echo "<br>";
echo --$y; echo "<br>";

//true = 1
//false = 0
var_dump(true and true); echo "<br>"; //1 and 1 = true, 0 and 0 = false
var_dump(true && true); echo "<br>"; //1 and 1 = true, 0 and 0 = false
var_dump(false or true); echo "<br>"; // 1 or 0 = true, 0 or 1 = true, 0 or 0 = false
var_dump(false || true); echo "<br>"; // 1 or 0 = true, 0 or 1 = true, 0 or 0 = false
var_dump(true xor true); echo "<br>";
var_dump(!false); echo "<br>";

$c = "Hello";
$c .= " Wolrd"; // $c = $c . $c . $c . $c;
echo "Hello"." World ".$x."<br>";
echo $c;
?>
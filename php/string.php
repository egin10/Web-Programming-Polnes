<?php
$string = "Belajar function string";
$panjangString = strlen($string);
$jmlKata = str_word_count($string);
$reverseString = strrev($string);
$cariKata = strpos($string, "function");
$replaceString = str_replace("string", "Kalimat", $string);

echo $string . "<br>";
echo "jumlah karakter : ".$panjangString . "<br>";
echo "jumlah kata : ".$jmlKata . "<br>";
echo $reverseString . "<br>";
echo $cariKata . "<br>";
echo $replaceString . "<br>";
?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<?php
			function cobaStatic()
			{
				//varibale static
				static $a = 1;
				echo $a;
				echo " -> static <br>";
				$a++;

				//varibale biasa
				$b = 1;
				echo $b;
				echo " -> biasa <br>";
				$b++;
			}

			cobaStatic(); //1
			cobaStatic(); //1+1 = 2
			cobaStatic();

			//echo & print
			$nama = "egin";
			echo "test menampilkan ".$nama." echo <br>";
			echo ("test menampilkan ".$nama." echo <br>");
			echo "test "," menampilkan ",$nama," <br>";
			print "test menampilkan ".$nama." print <br>";
			print ("test menampilkan ".$nama." print <br>");
		?>
	</body>
</html>
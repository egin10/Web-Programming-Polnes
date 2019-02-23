<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		Kata dari HTML. <br>
		<?php 
			echo "Kata dari PHP. Petik 2 <br>";
			echo '<b>Kata dari PHP. Petik 1</b> <br>';

			//comment1 hanya 1 baris
			/*
			comment2 untuk lebih dari 1 baris
			 */
			
			//membuat variable
			$nama = "egin";
			$domisili = "Samarinda";
			$umur = 17;
			echo "Nama saya <b>".$nama."</b> dan saya tinggal di".$domisili.". Sekarang saya berumur ".$umur;
			echo "<br>";

			//penjumlahan
			$a = 20;
			$b = 230;
			echo $a." + ".$b." = ";
			echo $a+$b;
			echo "<br>";
			
			//global & local variable
			//global
			$global = "isi dari global variable";
			function tampil(){
				//pinggil variable global
				global $global;
				//local
				$local = "isi dari local variable";
				echo $local;
				echo "<br>";
				echo $global; //tidak terpanggil
				echo "<br>";
			}
			tampil();
			echo $local; //tidak terpanggil
			echo $global;
		?>	

	</body>
</html>
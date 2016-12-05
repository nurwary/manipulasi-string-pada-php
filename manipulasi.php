<?php 
	function testKalimat($str){
		$strArray = explode(" ", $str);
		$arraylen = count($strArray);
		$output = "";
		
		for ($i=0; $i<$arraylen; $i++) {
			$firstChar = substr($strArray[$i], 0, 1);
			
			if(ctype_upper($firstChar)) {
				$len = strlen($strArray[$i]);
				$index = 0;
				
				if($len % 2 == 0)
					$index = $len / 2 -1;
				else
					$index = $len / 2;
				$output = $output . substr($strArray[$i], $index, 1);
			}
		}
		return $output;
	
			
		// 1) Tambahkan code pada function ini

		// 2) Anda bebas menambah function lain untuk mebantu anda dalam menyelesaikan pertanyaan

		// 3) Fungsi harus mengembalikan sebuah string yang merupakan penggabungan dari seluruh kata 'tengah' yang diambil dari tiap kata dengan huruf kapital di depan 

		// 4) Seluruh function PHP ini harus mengembalikan dan mencetak kata "Benar" sesuai dengan kriteria kalimat yang diberikan

		// 5) Jika jumlah huruf dalam kata tersebut adalah genap, maka ambil 1 kata sebelum tengah, contoh "Ayam" => 'y' 
	}

	echo testKalimat("Hello This Is a Php Problem");
	echo "<br>";
	echo testKalimat("the Quick Brown Fox jumps Over the lazy Dog");
	echo "<br>";
	echo testKalimat("Your Guess 	Is As Good As Mine") ;
	echo "<br>";
	echo testKalimat("this should 	be empty");
	echo "<br>";
	echo testKalimat("");
	echo "<br>";
	echo testKalimat(" 	");
	echo "<br>";
	echo testKalimat("this also emPty");
	
	echo (testKalimat("Hello This Is a Php Problem") == "lhIhb") ? "Benar<br>" : "Salah<br>";
	echo (testKalimat("the Quick Brown Fox jumps Over the lazy Dog") == "ioovo") ? "Benar<br>" : "Salah<br>";
	echo (testKalimat("Your Guess 	Is As Good As Mine") == "oeIAoAi") ? "Benar<br>" : "Salah<br>";
	echo (testKalimat("this should 	be empty") == "") ? "Benar<br>" : "Salah<br>";
	echo (testKalimat("") == "") ? "Benar<br>" : "Salah<br>";
	echo (testKalimat(" 	") == "") ? "Benar<br>" : "Salah<br>";
	echo (testKalimat("this also emPty") == "") ? "Benar<br>" : "Salah<br>";

?>

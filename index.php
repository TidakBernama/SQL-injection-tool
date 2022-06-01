<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>SQLI for Hidden Number Tool</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" placeholder="Masukkan Angka atau huruf..." name="input"><br>
			<input type="number" min="1" max="1000" placeholder="Jumlah..." name="input1"><br>
			<input type="submit" value="proses" name="proses">
		</form>

		<?php  
		$input = $_POST['input'];
		$input1 = $_POST['input1'];

		if(!empty($input) && !empty($input1)){
			if(isset($input) && isset($input1)){
				if(is_int(intval($input1))){
					echo "<span style='color:red;'>Result:</span>";
					for ($x=1; $x<=$input1; $x++){
						echo $input.$x.",";
					}
				}else{
					echo "Masukkan angka bukan huruf";
				}
			}else{
				echo "Terdapat input yang kosong";
			}
		}
		?><br><br><br><br><br><br><br><br><br>
		<h1>SQLI for Routed query tool</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" placeholder="Masukkan Angka atau huruf..." name="input2"><br>
			<input type="number" min="1" max="1000" placeholder="Jumlah..." name="input3"><br>
			<input type="submit" value="proses" name="proses">
		</form>

		<?php  
		$input2 = $_POST['input2'];
		$input3 = $_POST['input3'];

		if(!empty($input2) && !empty($input3)){
			if(isset($input2) && isset($input3)){
				if(is_int(intval($input3))){
					echo "<span style='color:red;'>Result:</span>";
					for ($x=1; $x<=$input3; $x++){
						echo $input2.",";
					}
				}else{
					echo "Masukkan angka bukan huruf";
				}
			}else{
				echo "Terdapat input yang kosong";
			}
		}
		?>
	</center>
</body>
</html>

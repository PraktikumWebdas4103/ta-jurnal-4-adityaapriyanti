
<body background = putih.jpg>
	<center><h2 style="font-family: Century Gothic"><u>vacation schedule</u></h2></center>
	<form action=" " method="POST" enctype="multipart/form-data">
		<li><b>Data: </b><br></li>
		Name	: Aditya Apriyanti <br>
		Nim		: 6701174035

	<table>
		<ul>
		<tr>
			<td><li><b>Photo</b></li></td>
			<td> <input type="file" name="photo" style="width: 80%; height: 20px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Hobby :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="hobi[]" value="Listening Music">Listening Music<br>
				<input type="checkbox" name="hobi[]" value="Swimming">Swimming<br>
				<input type="checkbox" name="hobi[]" value="Watching Movie">Watching Movie<br>
				<input type="checkbox" name="hobi[]" value="Drawing">Drawing<br>
				<input type="checkbox" name="hobi[]" value=" Football">Football<br>
				<input type="checkbox" name="hobi[]" value="Racing">Racing<br>
				<input type="checkbox" name="hobi[]" value="Jogging">Jogging<br>
				<input type="checkbox" name="hobi[]" value="Traveling">Traveling<br>
				<input type="checkbox" name="hobi[]" value="Reading">Reading<br>
				<input type="checkbox" name="hobi[]" value="And Other">And Other.......
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Genre Film :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="genre[]" value="Horror">Horror
				<input type="checkbox" name="genre[]" value="Action">Action 
				<input type="checkbox" name="genre[]" value="Anime">Anime
				<input type="checkbox" name="genre[]" value="Thriller">Thriller
			</td>
			<td>
				<input type="checkbox" name="genre[]" value="Animasi">Animasi
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Travelling Destination :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="trdestin[]" value="Bali">Bali<br>
				<input type="checkbox" name="trdestin[]" value="Raja Ampat">Raja Ampat<br>
			
				<input type="checkbox" name="trdestin[]" value="Pulau Derawan">Pulau Derawan<br>
				<input type="checkbox" name="trdestin[]" value="Bangka Belitung">Bangka Belitung<br>
			
				<input type="checkbox" name="trdestin[]" value="Labuan Bajo">Labuan Bajo<br>
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
			<td><input type="submit" name="submit" value="Submit" style="width: 100px;height: 40px;border-radius: 10px"></td>

		
	</table>

<?php
	if(isset($_POST['submit'])) {
		$hobby = $_POST['hobi'];
		$genre = $_POST['genre'];
		$destin = $_POST['trdestin'];
		$foto = $_FILES["photo"]["name"];

		echo "<br>";
		echo "<hr>";

		$uploaddir = 'gambar/';
    	$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

    	echo "<p>";

    	

	?>
	<center>
<table>
	<tr>
		<td align="center"><u><h2>Result :</h2></u></td>
	</tr>	
	<table border="2" style="width: 250px; height: 50px">
	<tr>
		<td><b>Hobby</b></td>
		<td align="center">
			<?php
				foreach ($hobby as $a) {
					echo $a."<br>";
				}
			?>		
		</td>
	</tr>
	<tr>
		<td><b>Genre</b></td>
		<td align="center">
			<?php
				foreach ($genre as $b) {
					echo $b."<br>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td><b>Destination</b></td>
		<td align="center">
			<?php
				foreach ($destin as $c) {
					echo $c."<br>";
				}
			?>	
		</td>
	</tr>
</table>
<br>
<br>
	<tr>
		<td><b>Picture :</b></td>
		<br>
		<br>
		<td>
			<?php
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
      				echo "<img src='gambar/$foto' style='width:200px;height:200px'>";	
    			} else {
       				echo "Upload failed";
    			}
			?>
		</td>

	</tr>
</table>
	<?php		

	}
?>
</body>
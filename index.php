<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>TUGAS STBI</title>
	<?php include 'navbar.php';?>
</head>
<body>
    <div align="center"><br><br><br>
<h3>CARI KATA DASAR</h3>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>

<br><br><br>
<div align="center">
    <h3>Anggota Kelompok : </h3>
    
    <p>Woelan Aziz S.| 16.01.53.0023</p>
    <p>M. Argo Alekta| 16.01.53.0035</p>
	
</div>
</div>
</body>
</html>
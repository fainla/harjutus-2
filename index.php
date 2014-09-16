<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
</head>
<body>
<?php 
echo "Tere!" . "Siin kõndis Mooses!"; 
echo "<br>";
echo "Järgmine rida";
?>

<br>
<h2>Arvutamine</h2>
<p>Teeme erinevaid tehteid</p>

<?php
	//Nii kommenteerid, aga programmides tee seda inglise keeles.
	# Kommida saab ka nii. 
	/*
	prr nii saab ka
	*/
 echo 4 + 5;   
 ?>
<br>
<?php echo 4 - 5;  ?>
<br>
<?php echo 4 / 5;  ?>
<br>
<?php echo 4 * 5; ?>

<h2> Muutujad </h2>

<?php
$number = "Tekst"; 
$number = 4-9; 
$number2 = 9;
$text = " Kahe muutuja summa"; 
echo "<p> Siin tuleb list</p>
<ul>
<li>".$text."</li>
<li>".($number + $number2)."</li>

 </ul>"; 
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head><title> Kalkulator Sederhana </title></head>
<body>
<form name="kalku" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input name="angka1" type="text" id="angka1" value="<?php echo $_POST['angka1'];?>">
<select name="operator" id="operator">
<option value="+">+
<option value="-">-
<option value="/">/
<option value="*">*
</select>
<input name="angka2" type="text" id="angka2" value="<?php echo $_POST['angka2'];?>">
<input name="submit" type="submit" id="submit" value="=">

<?php
$a = $_POST['angka1'];
$b = $_POST['angka2'];

if(!empty($a) and !empty($b)){
 if ($_POST['operator'] == '+'){
  $hasil= $a + $b;
  $opt = " + ";
 }
 elseif ($_POST['operator'] == '-'){
  $hasil= $a - $b;
  $opt = " - ";
 }
 elseif ($_POST['operator'] == '*'){
  $hasil= $a * $b;
  $opt = " * ";
 }
 elseif ($_POST['operator'] == '/'){
  $hasil= $a / $b;
  $opt = " / ";
 }
}
?>
<input name="hasil" type="text" id="hasil" value="<?php echo $hasil;?>" >
</form>
</body>
</html>
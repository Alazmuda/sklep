<form>
<?php
$con = new mysqli('127.0.0.1', 'root', '', 'sklep_spozywczy');
$q="SELECT id_zamowienia, data_zamowienia, id_klienta FROM zamowienia";
$f=0;
if($wynik=$con->query($q))
 
while($row=$wynik->fetch_array()){
echo "<input type='radio' name='fff' value=".$f.">".$row["id_zamowienia"] . ";" . $row["data_zamowienia"] . ";" . $row["id_klienta"] ."<br/>";
//echo $f;
$f++;
}
else
echo $con->errno . " " . $con->error;
$w="SELECT COUNT('id_zamowienia, data_zamowienia, id_klienta') FROM zamowienia";
while($q<$w){
 
}
?>
  <input type="submit" value="Submit">
</form>
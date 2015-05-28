<?php
/* Домашно 7
С помощта на php създайте масив с 6 елемента, които представляват произволни марки коли. 
Обходете масива и визуализирайте 6 параграфа, които съдържате текста „Искам да си купя …“ като на мястото на многоточието поставете всяка една от марките.
Изтрийте последния елемент от масива и го обходете отново.
Този път визуализирайте 5 параграфа с текст „ще си купя …“ като на мястото на многоточието поставете съответната марка
*/

include_once ("block.php");

printheader();

$array_fruts = array("apple","carot","tomato","malina","capina","qgoda");

$array["aa"] = "BMW";
$array["av"] = "Ford";
$array["bg"] = "Mazda";
$array["df"] = "Citroen";
$array["ds"] = "Toyota";
$array["tr"] = "Opel";
echo "<strong>Използваме ли само FOREACH когато ключовете са стринг?</strong><br />";
foreach ($array as $fr=>$fg){
	echo "$fr Искам да си купя $fg !<br />";
}
echo "<hr />";
unset($array["tr"]);
foreach ($array as $fr=>$fg){
	echo "$fr Ще си купя $fg !<br />";
}

echo "<br /><strong>Използваме ли само FOR когато ключовете са ЧИСЛА?</strong><br />";

	$size = count($array_fruts);
	for($i = 0; $i < "$size" ; $i++){
		echo "<p>Искам да си купя " . $array_fruts[$i] . "!</p>";
	}
	echo "<hr />";
	unset($array_fruts[5]);
	$size = count($array_fruts);
	for($i = 0; $i < "$size" ; $i++){
		echo "<p>Ще си купя " . $array_fruts[$i] . "!</p>";
	}	

printfooter();
?>
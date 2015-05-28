<?php
/*Домашно 5. 
Дефинирайте 2 константи с имena COLS и ROWS със стойности съответно 4 и 5. 
С помощта на два вложени for цикъла генерирайте таблица като за брой на редовете използвайте константа rows а за брой на колоните използвайте cols. 
В всяка клетка изпишете номера на реда и номера на колоната разделени със запетая
*/

include_once ("block.php");
printheader();

define ("COLS", "4");
define ("ROWS", "5");
echo "<table class=\"homework6\">";		//ЗАПОЧВА ТАБЛИЦА
for ($rows=1;$rows<=ROWS;$rows++){
	echo "<tr></tr>";						//РЕДОВЕ НА ТАБЛИЦА
		for ($cols=1;$cols<=COLS;$cols++){
		echo "<td>$rows,$cols</td>";		//КОЛОНИ НА ТАБЛИЦА
	}
}
echo "</table>";		//СВЪРШВА ТАБЛИЦА

printfooter();
?>
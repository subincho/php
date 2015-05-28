<?php
/*Домашно 5. 
С помощта на php, html и css направете страница която изписва всички числа от 0 до 100 на нов ред.

1. Ако числото е четно цветът на фона трябва да е син.
2. Ако числото е нечетно цветът на фона трябва да е зелен.
3. Ако числото се дели на 7 без остатът изпишете на същия ред "bingo!".
*/

include_once ("block.php");

printheader();

	for($i=0;$i<=100;$i++){
		if (!($i%2)&&!($i%7)){
			echo "<div class=\"blue\">$i bingo!</div>";
		} else if (!($i%2)&&($i%7)){
			echo "<div class=\"blue\">$i</div>";
		} else if (($i%2)&&!($i%7)){
			echo "<div class=\"green\">$i bingo!</div>";
		} else if (($i%2)&&($i%7)){
			echo "<div class=\"green\">$i</div>";
		}
}

printfooter();
?>
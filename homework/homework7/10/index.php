<?php
/* Домашно 10
Направете функция която да приема 2 параметъра. Едно число и една дума.
Ако думата съдържа четен брой символи добавете към числото 12
Ако думата съдържа нечетен брой символи извадете 3 от числото
Ако след тази операция числото е по-голямо от 10 извадете от него 22
Ако след операцията числото е отрицателно добавете 14.
Стойността на числовият параметър трябва да се променя вътре в функцията
Извикайте функцията 6 пъти с един и същи числов параметър и различни думи
*/

include_once ("block.php");

printheader();

function calculate($number = 30) {
		$array = array('e','dv','trr','chet','pelkt','shestr','sldfkjslk');
		shuffle($array);
		foreach($array as $key=>$value){
		$word="$value";
		}
		$wordlenght=strlen($word);
		if(!($wordlenght%2)){
			$number+=12;
		} else if ($wordlenght%2){
			$number-=3;
		}
		if ($number>10){
			$number-=22;
		} else if ($number<0){
			$number+=14;
		}
		return $number;
	}															
echo "<table>";
for($d=0;$d<6;$d++){
	echo "<tr><td>";
	echo calculate();
	echo "</td></tr>";
}
echo "</table>";

printfooter();
?>
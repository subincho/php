<?php
/* Домашно 9
С помощта на функции в php направете програма, която пресмята лицето на триъгълник по зададена страна и височина към нея. (S=a.ha/2). 
На случаен принцип генерирайте 10 различни страни и съответно височини към тях и изведете лицето на образувания от тях триъгълник на екрана
Ако лицето е до 10 см2 – оцветете текста в зелен цвят
Ако лицето е от 10 до 23 см2 – оцветете текста в червен цвят
Ако лицето е по-голямо от 23 см2 – оцветте текста в син цвят
*/

include_once ("block.php");

printheader();

for($i = 0; $i < 10; $i++){
		$side = rand(1, 50);
		$height = rand(1, 20);
		$area = calculateRectangleArea($side, $height);
		if($area<=10){
				echo "<div id=\"green\"> При Лице е равено на $area cm2</div>";
			} else if($area>10&&$area<=23){
				echo "<div id=\"red\"> При Лице е равено на $area cm2</div>";
				} else if($area>23){
					echo "<div id=\"blue\"> При Лице е равено на $area cm2</div>";
					}
	}	
function calculateRectangleArea($side, $height) {
	$area = ($side * $height)/2;
	return $area;
	}

printfooter();	
?>
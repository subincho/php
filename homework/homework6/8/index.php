<?php
/* Домашно 8
С помощта на Php създайте асоциативен масив съдържащ 5 елемента, всеки от който с ключ - име на компания, и стойност web-site на компания. 
С помощта на цикъла foreach генерирайте неподреден списък съдържащ линкове към сайтовете. 
Текстът на линковете трябва да бъде името на съответната компания
*/

include_once ("block.php");

printheader();

//Започва масив
$array['Dell'] = 'www.dell.com';
$array['HP'] = 'www.hp.com';
$array['Lenovo'] = 'www.lenovo.com';
$array['Fujitsu'] = 'www.fujitsu.com';
$array['Acer'] = 'www.acer.com';
print_r($array);

//list($a, $b, $c, $d, $e)=$array();
natcasesort($array);
echo "<br /><br /><ul>";
foreach ($array as $key=>$value) {
		echo "<li><a href=\"http://$value\">$key</a></li>";
    }
echo "</ul>";

printfooter();
?>
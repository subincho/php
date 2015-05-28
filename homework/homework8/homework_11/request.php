<?php
/*Направете 2 Php доkумента съответно request.php и response.php. 
Във файлът request.php направете форма, която да насочва информацията към response.php.  
В първия файл направете форма за смяна на парола с метод Post която съдържа 4 полетa – 
потребителско име, стара парола, нова парола и повторете новата парола. 
Във втория файл проверете дали изпратената заявка съдържа вярна информация съответно – потребителското име е “first-user”, 
Старата парола е “money” и новата парола и полето за повторение на паролата съвпадат. 
Ако информацията е вярна изпишете на екрана „Успешна смяна!“. 
Ако информацията не е коректно изпишете „грешка!“
		<span>Повторете нова парола:</span>
		<input type="submit" value="Въведи" />
*/

include_once ("block.php");

printheader();
?>
<form action="response.php" method="POST">
	<div>
		<span>Потребителско име:</span>
		<input type="text" name="username" /><br />
	</div>
	<div>
		<span>Стара парола:</span>
		<input type="password" name="oldpass" /><br />
	</div>
	<div>
		<span>Нова парола:</span>
		<input type="password" name="newpass" /><br />
	</div>
	<div>
		<span>Повторете нова парола:</span>
		<input type="password" name="renewpass" /><br />
	</div>
	<div>
		<input type="submit" value="Въведи" /><br />
	</div>
</form>	
<?php
printfooter();
?>
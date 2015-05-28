<?php

include_once ("block.php");

printheader();
?>
<form action="response.php" method="POST">
	<div>
		<span>Потребителско име:</span>
		<input type="text" name="username" /><br />
	</div>
	<div>
		<span>Парола:</span>
		<input type="password" name="pass" /><br />
	</div>
	<div>
		<span>Повторение парола:</span>
		<input type="password" name="repass" /><br />
	</div>
	<div>
		<span>Таен въпрос:</span>
		<input type="text" name="question" /><br />
	</div>
	<div>
		<span>Таен отговор:</span>
		<input type="text" name="question_replay" /><br />
	</div>
	<div>
		<span>E-mail:</span>
		<input type="email" name="email" /><br />
	</div>
	<div>
		<span>Име:</span>
		<input type="text" name="name" /><br />
	</div>
	<div>
		<span>Фамилия:</span>
		<input type="text" name="lastname" /><br />
	</div>
	<div>
		<span>Пол:</span><br />
		<input type="radio" name="sex" value="male" checked />Мъж<br />
		<input type="radio" name="sex" value="female" />Жена<br />
		<input type="radio" name="sex" value="animal" />Животно<br />
	</div>
	<div>
		<span>Рождена дата:</span>
		<input type="text" name="birthday" /><br />
	</div>	
	<div>
		<input type="submit" name="submit" value="Въведи" /><br />
	</div>
</form>	
<?php
printfooter();
?>
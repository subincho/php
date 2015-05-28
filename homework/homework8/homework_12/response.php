<?php
/*Създайте потребителска форма за регистрация на user. Формата трябва да съдържа:
Потребителско име
Парола
Повторение на паролата
Таен въпрос
Таен отговор
E-mail
Име
Фамилия
Пол
Рождена дата
Направете валидация и верификация с помощта на php. Всички полета трябва да имат стойност
*/

function isValid($username, $pass, $repass, $question, $question_replay, $email,
		$name, $lastname, $sex, $birthday){
		if($pass==$repass && $username!=null && $pass!=null && $question!=null
		 && $question_replay!=null && $name!=null && $lastname!=null && $sex!=null 
		 && $birthday!=null && $email!=null ){
			return true;
			}  return false;
}
if(isset($_POST["submit"])){
		$username=($_POST["username"]);
		$pass=($_POST["pass"]);
		$repass=($_POST["repass"]);
		$question=($_POST["question"]);
		$question_replay=($_POST["question_replay"]);
		$email=($_POST["email"]);
		$name=($_POST["name"]);
		$lastname=($_POST["lastname"]);
		$sex=($_POST["sex"]);
		$birthday=($_POST["birthday"]);
		$isValid =isValid($username, $pass, $repass, $question, $question_replay, $email,
		$name, $lastname, $sex, $birthday);
	if($isValid){
			echo "<div><strong>Успешна!</strong></div>"; 
}  else{
            echo "<div><strong>Грешка! Моля Опитайте пак.</strong></div>";
        }
}
?>
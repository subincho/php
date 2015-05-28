<?php
/*Направете 2 Php доkумента съответно request.php и response.php. 
Във файлът request.php направете форма, която да насочва информацията към response.php.  
В първия файл направете форма за смяна на парола с метод Post която съдържа 4 полетa – 
потребителско име, стара парола, нова парола и повторете новата парола. 
Във втория файл проверете дали изпратената заявка съдържа вярна информация съответно – потребителското име е “first-user”, 
Старата парола е “money” и новата парола и полето за повторение на паролата съвпадат. 
Ако информацията е вярна изпишете на екрана „Успешна смяна!“. 
Ако информацията не е коректно изпишете „грешка!“*/
		
function isValid($username, $oldpass, $newpass, $renewpass){
		$name = "first-user";
		$op = "money";
		if($username==$name && $oldpass==$op && $newpass==$renewpass && $newpass!=null){
			return true;
			}  return false;
}

 		$username=$_POST["username"];
		$oldpass=$_POST["oldpass"];
		$newpass=$_POST["newpass"];
		$renewpass=$_POST["renewpass"];
		$isValid = isValid($username, $oldpass, $newpass, $renewpass);
		if($isValid){
			echo "<div><strong>Успешна смяна!</strong></div>"; 
		 }  else{
            echo "<div><strong>Грешка! Моля Опитайте пак</strong></div>";
        }
?>
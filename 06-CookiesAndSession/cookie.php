<?php
	define('HOUR', 3600);
	$visitor = false;
	if(isset($_COOKIE['return']))
		{
			$visitor = true;
		}
	else
		{
			setcookie('return', '1', time()+300);
		}
	echo '<h1>У этой страницы обязательно должна быть кодировка \'(Unicode UTF-8 without signature) - Codepage 65001\'</h1>';
	echo $visitor ? 'Welcome back' : 'Hello';
	echo '<img src="CODEPAGE.png">';
?>

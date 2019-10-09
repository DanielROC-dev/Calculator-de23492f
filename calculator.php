<?php
echo "> Welke operatie wil je uitvoeren? (+, -)" . PHP_EOL;
$multiplier = readline("> ");
if ( $multiplier === '+' ) 
{
	echo "> Eerste getal?" . PHP_EOL;
	$first1 = readline("> ");
	echo "> Tweede getal?" . PHP_EOL;
	$second1 = readline("> ");
	echo ($first1 + $second1);
	
} else if ( $multiplier === '-' ) 
{ 
	echo "> Eerste getal?" . PHP_EOL;
	$first2 = readline("> ");
	echo "> Tweede getal?" . PHP_EOL;
	$second2 = readline("> ");
	echo ($first2 - $second2);
}


?>

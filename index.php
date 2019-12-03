<?php

require 'Pokemon.php';

$pikachu =  new Pokemon(
	'Pikachu',
	'Lightning', 
	 60,
	[['Electric Ring',50 ],['Pika Punch',20]],
	['Fire', 1.5],
	['Fighting',20]
);

$charmeleon  =  new Pokemon(
	'Charmeleon',
	'Fire', 
	 60,
	[['Head Butt',10],['Flare',30]],
	['Water', 2],
	['Lightning',10]
);

print_r("<pre>Charmeleon's HP: ". $charmeleon->health . '</pre>');
$pikachu->attack($charmeleon, 0);
print_r("<pre>Charmeleon's HP after battle: ". $charmeleon->health . '</pre>');
print_r("<pre>Pikachu's HP: ". $pikachu->health . '</pre>');
$charmeleon->attack($pikachu, 1);
print_r("<pre>Pikachu's HP after battle: ". $pikachu->health . '</pre>');
<?php

function functionName($arg1 = '', $arg2 = '') {
   echo "arg1: $arg1\n";
   echo "arg2: $arg2\n";
}

function ageCheck($age, $ageLimit) {
	if ($age >= $ageLimit) {
		echo "Just do it!";
	} else {
		echo "Sorry, but you can't";
	}
}

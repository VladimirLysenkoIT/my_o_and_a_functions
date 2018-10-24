<?php
/*
 *	write a function that prints words starting with "A"
 *  write a function that will output words ending with "O"
 **/
$string = "
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
";
$character_mask = ", . ? ! - :";

function starting_with_a($string, $character_mask) {
	$arr = explode(" ", $string);
	$length = count($arr);
	for ($i=0; $i < $length; $i++) { 
		if (preg_match('/\b[a,A]/s', trim($arr[$i], $character_mask))){
			echo trim($arr[$i], $character_mask);
			echo " ";
		}
	}
	echo "<br>";
}

function ending_with_o($string, $character_mask) {
	$arr = explode(" ", $string);
	$length = count($arr);
	for ($i=0; $i < $length; $i++) { 
		if (preg_match('/[o,O]\b/s', trim($arr[$i],$character_mask))){
			echo trim($arr[$i], $character_mask);
			echo " ";
		}
	}
}

starting_with_a($string, $character_mask);
ending_with_o($string, $character_mask);
<?php
/*
 * magic8Ball.php
 * 
 * Tutorial from www.codecademy.com
 */
		// Step 1 => Define a magic8Ball() function.
function magic8Ball(){
	echo "Hello friend... what can I reveal for you?\n";  
		// Step 2 => Use the readline() function to take in their question. Save this as a variable. 
	$question = readline("???");
		// Step 3 => Use echo to print a message to the terminal. 
	echo "\n As I see it... You ask $question... I have consulted the many gods and spirits and they tell me that: "; 
		// step 4 => Your “magic” answer will be determined by a random integer
	$magic = rand(0, 19);
		// step 5 => Add a line to your program which uses echo to print the random number. 
		// Step 6/7 => Test function. 
		// step 8 => Add the conditional logic 
	if ($magic === 0) {
	echo "It is certain.\n";
	} elseif ($magic === 1) {
	echo "It is decidedly so.\n";
	} elseif ($magic === 2) {
	echo "Without a doubt.\n";
	} elseif ($magic === 3) {
	echo "Yes - definitely.\n";
	} elseif ($magic === 4) {
	echo "You may rely on it.\n";
	} elseif ($magic === 5) {
	echo "As I see it, yes.\n";
	} elseif ($magic === 6) {
	echo "Most likely.\n";
	} elseif ($magic === 7) {
	echo "Outlook good.";
	} elseif ($magic === 8) {
	echo "Yes.\n";
	} elseif ($magic === 9) {
	echo "Signs point to yes.\n";
	} elseif ($magic === 10) {
	echo "Reply hazy, try again.\n";
	} elseif ($magic === 11) {
	echo "Ask again later.\n";
	} elseif ($magic === 12) {
	echo "Better not tell you now.\n";
	} elseif ($magic === 13) {
	echo "Cannot predict now.\n";
	} elseif ($magic === 14) {
	echo "Concentrate and ask again.\n";
	} elseif ($magic === 15) {
	echo "Don't count on it.\n";
	} elseif ($magic === 16) {
	echo "My reply is no.\n";
	} elseif ($magic === 17) {
	echo "My sources say no.\n";
	} elseif ($magic === 18) {
	echo "Outlook not so good.\n";
	} else {
	echo "What???\n";
	}
};
		// Step 9 -> REMOVE: echo $magic;
		// Step 10 -> Call Function; 
	magic8Ball();
	magic8Ball();
	magic8Ball();
	magic8Ball();
	magic8Ball();
		//##EOP##//
?>

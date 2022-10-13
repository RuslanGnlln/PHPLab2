<?php
function task1()
{
	/* Imagine a lot of code here */
	$very_bad_unclear_name = "15 chicken wings";

	// Write your code here:
	$order = &$very_bad_unclear_name;
	$order .= " and spicy sauce";

	// Don't change the line below
	echo "\nYour order is: $very_bad_unclear_name.";
}

function task2()
{
	$intA = 9;
	echo "$intA";

	// Использовал <br/> т.к. \n не переносил строку
	$intB = 13;
	echo "<br/>$intB";

	$floatC = 18.47;
	echo "<br/>$floatC";

	echo "<br/>" . 3 * 4;

	$last_month = 1187.23;
	$this_month = 1089.98;
	echo "<br/>";
	echo $last_month - $this_month;
}

function task11()
{
	$num_languages = 4;
	$months = 11;

	$days = $months * 16;

	$days_per_language = $days / $num_languages;

	echo $days_per_language;
}

function task12()
{
	echo 8**2;
}

task12();
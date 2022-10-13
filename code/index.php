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

function task13()
{
	$my_num = 15;
	$answer = $my_num;
	$answer += 2;
	$answer *= 2;
	$answer -= 2;
	$answer /= 2;
	$answer -= $my_num;
	echo $answer;
}

function task14()
{
	// работа с %
	$a = 10;
	$b = 3;
	echo $a % $b . "<br/>";

	if ($a % $b > 0)
		echo "Делится с остатком " . $a % $b;
	else
		echo "Делится";
	echo "<br/>";

	// Работа со степенью и корнем
	$st = pow(2,10);
	echo $st . "<br/>";

	echo sqrt(245) . "<br/>";

	$arr = [4, 2, 5, 19, 13, 0, 10];
	$sum = 0;
	foreach ($arr as &$value){
		$sum += pow($value, 2);
	}
	echo sqrt($sum) . "<br/>";

	// Работа с функциями округления
	echo round(sqrt(379)) . "<br/>";
	echo round(sqrt(379), 1) . "<br/>";
	echo round(sqrt(379), 2) . "<br/>";

	$floorCeilArr = array("floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587)));
	echo $floorCeilArr["floor"] . " " . $floorCeilArr["ceil"] . "<br/>";

	// Работа с min max
	$minMaxArr = [4, -2, 5, 19, -130, 0, 10];
	echo min($minMaxArr) . " " . max($minMaxArr) . "<br/>";

	// Работа с рандомом
	echo rand(1,100) . "<br/>";

	$randomArr = [];
	for ($i = 0; $i < 10; $i++) {
		$randomArr[$i] = rand(1,10);
	}
	for ($i = 0; $i < 10; $i++) {
		echo $randomArr[$i] . ' ';
	}
	echo "<br/>";

	// Работа с модулем
	$a = 8;
	$b = 17;
	echo abs($a-$b) . "<br/>";

	$absArray = [1, 2, -1, -2, 3, -3];
	for ($i = 0; $i < 6; $i++) {
		$absArray[$i] = abs($absArray[$i]);
	}
	for ($i = 0; $i < 6; $i++) {
		echo $absArray[$i] . ' ';
	}
	echo "<br/>";

	// Общее
	$number = 78;
	$divider = 1;
	$dividerArr = [];
	while ($divider <= $number){
		if ($number % $divider == 0)
			$dividerArr[] = $divider;
		$divider += 1;
	}
	for ($i = 0; $i < count($dividerArr); $i++){
		echo $dividerArr[$i] . ' ';
	}
	echo "<br/>";

	$sumArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$sum = 0;
	for ($i = 0; $i < count($sumArr); $i++){
		$sum += $sumArr[$i];
		if ($sum > 10){
			echo $i+1 . "<br/>";
			break;
		}
	}
}

function task15()
{
	function printStringReturnNumber(): int
	{
		echo "string" . "<br/>";
		return 8;
	}
	$my_num = printStringReturnNumber();
	echo $my_num;
}

function task16()
{
	function increaseEnthusiasm(string $str): string
	{
		return $str . "!";
	}

	echo increaseEnthusiasm("wow") . "<br/>";

	function repeatThreeTimes(string $str): string
	{
		return $str . $str . $str;
	}

	echo repeatThreeTimes("echo") . "<br/>";


	function cut(string $str, int $n = 10): string
	{
		return substr($str,0,$n);
	}

	echo cut("word", 2) . "<br/>";


	function printArr(array $arr)
	{
		if (count($arr) == 0){
			return;
		}
		echo array_shift($arr) . " ";
		printArr($arr);
	}

	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	printArr($arr);
	echo "<br/>";


	function sumDigits9(int $number)
	{
		if ($number <= 9){
			return;
		}
		$number = array_sum(str_split($number));
		echo $number . " ";
		sumDigits9($number);
	}

	$number = 1984856;
	sumDigits9($number);
}

task16();
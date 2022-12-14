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
		echo $number . " ";
		if ($number <= 9){
			return;
		}
		$number = array_sum(str_split($number));
		sumDigits9($number);
	}

	$number = 1984856;
	sumDigits9($number);
}

function task17()
{
	$arrX = [];
	$count = 10;
	$n = 1;
	for ($i = 0; $i < $count; $i++){
		$arrX[$i] = "";
		for ($j = 0; $j < $n; $j++){
			$arrX[$i] .= "x";
		}
		$n++;
	}
	for ($i = 0; $i < $count; $i++){
		echo $arrX[$i] . " ";
	}
	echo "<br/>";

	function arrayFill(string $str, int $n): array
	{
		$arr = [];
		for ($i = 0; $i < $n; $i++){
			$arr[$i] = $str;
		}
		return $arr;
	}

	$filledArr = arrayFill('y', 5);
	for ($i = 0; $i < count($filledArr); $i++){
		echo $filledArr[$i] . " ";
	}
	echo "<br/>";

	$sumArr = [[1, 2, 3], [4, 5], [6]];
	$sum = 0;
	for ($i = 0; $i < count($sumArr); $i++){
		$sum += array_sum($sumArr[$i]);
	}
	echo $sum . "<br/>";

	$loopArr = [];
	for($i = 0; $i < 3; $i++){
		for($j = 0; $j < 3; $j++){
			$loopArr[$i][$j] = $i * 3 + $j + 1;
		}
	}
	for($i = 0; $i < 3; $i++){
		for($j = 0; $j < 3; $j++){
			echo $loopArr[$i][$j] . " ";
		}
		echo "<br/>";
	}

	$givenArr = [2, 5, 3, 9];
	$result = $givenArr[0] * $givenArr[1] + $givenArr[2] * $givenArr[3];
	echo $result . "<br/>";

	$user = ['name' => 'Joseph', 'surname' => 'Stalin', 'patronymic' => 'Vissarionovich'];
	echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "<br/>";

	$date = ['year' => 2022, 'month' => 10, 'day' => 14];
	echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "<br/>";

	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo count($arr) . "<br/>";

	echo end($arr) . "<br/>";
	echo prev($arr);
}

function task18()
{
	function moreThan10(int $a, int $b): bool
	{
		if ($a + $b > 10){
			return true;
		} else {
			return false;
		}
	}

	echo moreThan10(5,3) . "<br/>";

	function isEqual(int $a, int $b): bool
	{
		if ($a == $b){
			return true;
		} else {
			return false;
		}
	}

	echo isEqual(5,5) . "<br/>";

	$test = 0;
	echo ((!$test)? 'верно' : 'неверно') . "<br/>";

	$age = rand(1, 110);
	echo "age = " . $age . "<br/>";
	if ($age < 10){
		echo "age" . " < 10" . "<br/>";
	} else if ($age > 99){
		echo "age" . " > 99" . "<br/>";
	} else {
		$digitsSum = array_sum(str_split($age));
		if ($digitsSum <= 9){
			echo "сумма цифр однозначна" . "<br/>";
		} else {
			echo "сумма цифр двузначна" . "<br/>";
		}
	}

	$arr = [1, 2, 3];
	if (count($arr) == 3){
		echo array_sum($arr);
	}
}

function task19()
{
	$n = 20;
	for ($i = 1; $i <= $n; $i++){
		for ($j = 1; $j <= $i; $j++){
			echo 'x';
		}
		echo "<br/>";
	}
}

function task20()
{
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	echo array_sum($arr)/count($arr) . "<br/>";

	function sum100(int $i): int
	{
		if ($i <= 100){
			return $i + sum100($i + 1);
		}
		return 0;
	}

	echo sum100(1) . "<br/>";

	$sqrtArr = array_map('sqrt', $arr);
	for($i = 0; $i < count($sqrtArr); $i++){
		echo $sqrtArr[$i] . ' ';
	}
	echo "<br/>";

	$index = range('a', 'z');
	$index = array_flip($index);
	function plusOne(int $a): int
	{
		return $a + 1;
	}
	$index = array_map('plusOne', $index);
	print_r($index);
	echo "<br/>";

	$str = '1234567890';
	echo array_sum(str_split($str, 2));
}

task20();

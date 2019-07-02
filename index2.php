<?php
	echo "lesson5";
	echo date("Y-m-d H:i:s");
	/*file_put_contents("text.txt", "lesson5");
	echo file_get_contents("text.txt");		//Исключения (деление на 0) с выведением строки в терминал
	$a=10;
	$b=0;
	try {
		if ($b == 0) {
			throw new Exception ();
		}
			$c = $a/ $b;
	}
	catch (\Exception $e) {
		echo "На ноль делить нельзя!";
	}*/
	/*var_dump($argv); //Преобразование в строку
	$operand1 = $argv[1];	
	$operation = $argv[2];	//Операции = - * /
	$operand2 = $argv[3];

	switch ($operation) {
		case "+" : {
			$result = $operand1 + $operand2; 
			break;
		}
		case "-" : {
			$result = $operand1 - $operand2; 
			break;
		}
		case "x" : {
			$result = $operand1 * $operand2; 
			break;
		}
		case "/" : {
			if ($operand2 == 0){
				echo "На ноль делить нельзя";
				die();
			}
			$result = $operand1 / $operand2; 
			break;
		}
		default: { ///Срабатывает тогда, когда не сработала ни одна из ветвей кейсов
				echo "Неизвестный оператор";
				die();
		}
	}	
	echo "Result = $result\n";*/ //Калькулятор
	/*echo __DIR__; //Директория, где лежит данный файл
	echo __FILE__; //Показывает имя фaйла, в котором выполняется операция
	const MY_CONST = 100; //Объявление своей константы. Не меняется на протяжении всей работы скрипта
	$array=[];
	for ($i=0; i<100; $i++) {
		$array[] = mt_rand(0, 1000);
	}
	for ($i=0; i <100; $i++)
	{
		if ($array[$i] > 500)
			continue;
		echo $array[$i]. "\n";
	}*/
	$array = [];
		for ($i = 0; $i<10; $i++) {
			$sub_array = []; //одна строка
		for ($j=0; $j<10; $j++) {
			$sub_array[] = mt_rand(0, 1000);
		}
			$array[] = $sub_array;
		}
		for ($i=0; $i<count($array); $i++) {
			echo implode (',', $array[$i]);
			/*for ($j=0; $j<count($array[$i]); $j++) {
				echo $array[$i][$j] .','; //Преобразование массива в строку
			}*/
			echo "\n";
		}


























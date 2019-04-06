<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>PHP TEST</title>
</head>
<body>
	<h1 id="title">Calculator</h1>
	<form id="form" method=get>
		<input type="text" name="num1" placeholder="number1">
		<input type="text" name="num2" placeholder="number2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
		<br>
		<button type="submit" name="submit" value="submit" id="button">Calculate</button>
	</form>
	<br>
	<p id="answer">The answer is:
	<?php
	// Receive the data from the form and save them.
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$operator = $_GET['operator'];
	$submit = $_GET['submit'];

	// If the submit button has a value of 'submit' do this.
	if($submit == 'submit') {
		switch ($operator) {
			case 'Add':
			$total = $num1 + $num2;
			break;

			case 'Subtract':
			$total = $num1 - $num2;
			break;

			case 'Multiply':
			$total = $num1 * $num2;
			break;

			case 'Divide':
			$total = $num1 / $num2;
			break;

			default:
			echo 'No operator was found.';
		}
	}
	echo "<span>$total</span>";
	?>
	</p>
</body>
</html>
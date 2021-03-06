<?php
	test('adaptive simpson should return an estimated definite integral of a function', 'testCalculusAdaptiveSimpson');
	function testCalculusAdaptiveSimpson() {
		return NumbersPHP\Basic::numbersEqual(NumbersPHP\Calculus::adaptiveSimpson('testCalculusAdaptiveSimpsonTestFunc', 0, 100), 666666.66667, NumbersPHP\Numbers::EPSILON);
	}
	function testCalculusAdaptiveSimpsonTestFunc($x) {
		return 2 * $x * $x;
	}
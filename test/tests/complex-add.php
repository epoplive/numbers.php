<?php
	test('add should return the sum of two complex numbers', 'testComplexAdd');
	function testComplexAdd() {
		$a = new NumbersPHP\Complex(3, 4);
		$b = new NumbersPHP\Complex(5, 6);
		$result = $a->add($b);
		if($result->real != 8)
			return false;
		if($result->imaginary != 10)
			return false;
		if($a->magnitude() != 5)
			return false;
		if(!($a->phase() - NumbersPHP\Numbers::EPSILON < 0.9272952180016122 && 0.9272952180016122 < $a->phase() + NumbersPHP\Numbers::EPSILON))
			return false;
		return true;
	}
<?php
	test('subtraction should return the difference of items in an array', 'testBasicSubtraction01');
	function testBasicSubtraction01() {
		if(NumbersPHP\Basic::subtraction(array(5, 3, 1, -1)) != 2)
			return false;
		return true;
	}
	
	test('subtraction should throw an exception when given anything but an array', 'testBasicSubtraction02');
	function testBasicSubtraction02() {
		try {
			NumbersPHP\Basic::subtraction(1);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Input must be of type Array';
		}
		return false;
	}
	
	test('subtraction should throw an exception when given anything objects other than numbers', 'testBasicSubtraction03');
	function testBasicSubtraction03() {
		try {
			NumbersPHP\Basic::subtraction(array('test', 1, 1, 2));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'All elements in array must be numbers';
		}
		return false;
	}
	
	test('subtraction should throw an exception last element is not a number', 'testBasicSubtraction04');
	function testBasicSubtraction04() {
		try {
			NumbersPHP\Basic::subtraction(array(1, 1, 2, 'test'));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'All elements in array must be numbers';
		}
		return false;
	}
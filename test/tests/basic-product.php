<?php
	test('product should return the product of items in an array', 'testBasicProduct01');
	function testBasicProduct01() {
		if(NumbersPHP\Basic::product(array(1, 2, 3, 4)) != 24)
			return false;
		if(NumbersPHP\Basic::product(array(-3, 2)) != -6)
			return false;
		return true;
	}
	
	test('product should throw an exception when given anything but an array', 'testBasicProduct02');
	function testBasicProduct02() {
		try {
			NumbersPHP\Basic::product(1);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Input must be of type Array';
		}
		return false;
	}
	
	test('product should throw an exception when given anything objects other than numbers', 'testBasicProduct03');
	function testBasicProduct03() {
		try {
			NumbersPHP\Basic::product(array(1, 2, 'error'));
			NumbersPHP\Basic::product(array('error', 1, 2));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'All elements in array must be numbers';
		}
		return false;
	}
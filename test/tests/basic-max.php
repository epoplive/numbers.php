<?php
	test('max should return the biggest number in an array', 'testBasicMax');
	function testBasicMax() {
		if(NumbersPHP\Basic::max(array(1, 2, 3, 42)) != 42)
			return false;
		return true;
	}
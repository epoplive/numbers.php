<?php
namespace NumbersPHP;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-22 at 18:16:55.
 */
class BasicTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Basic
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Basic;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers NumbersPHP\Basic::sum
     */
    public function testSum()
    {
        $this->assertEquals(
            6,
            \NumbersPHP\Basic::sum(array(0, 1, 2, 3))
        );

        $this->assertEquals(
            0,
            \NumbersPHP\Basic::sum(array(0, -3, 5, -2))
        );
    }

    /**
     * @covers NumbersPHP\Basic::sum
     * @expectedException \Exception
     */
    public function testSumOne()
    {
        \NumbersPHP\Basic::sum(1);
    }

    /**
     * @covers NumbersPHP\Basic::sum
     * @expectedException \Exception
     */
    public function testSumString()
    {
        \NumbersPHP\Basic::sum(array(1, 2, 'error'));
    }

    /**
     * @covers NumbersPHP\Basic::subtraction
     */
    public function testSubtraction()
    {
        $this->assertEquals(
            2,
            \NumbersPHP\Basic::subtraction(array(5, 3, 1, -1))
        );
    }

    /**
     * @covers NumbersPHP\Basic::subtraction
     * @expectedException \Exception
     */
    public function testSubtractionOne()
    {
        \NumbersPHP\Basic::subtraction(1);
    }

    /**
     * @covers NumbersPHP\Basic::subtraction
     * @expectedException \Exception
     */
    public function testSubtractionString()
    {
        \NumbersPHP\Basic::subtraction(array('test', 1, 1, 2));
    }

    /**
     * @covers NumbersPHP\Basic::product
     */
    public function testProduct()
    {
        $this->assertEquals(
            24,
            \NumbersPHP\Basic::product(array(1, 2, 3, 4))
        );

        $this->assertEquals(
            -6,
            \NumbersPHP\Basic::product(array(-3, 2))
        );

    }

    /**
     * @covers NumbersPHP\Basic::product
     * @expectedException \Exception
     */
    public function testProductOne()
    {
        \NumbersPHP\Basic::product(1);
    }

    /**
     * @covers NumbersPHP\Basic::product
     * @expectedException \Exception
     */
    public function testProductStrings()
    {
        \NumbersPHP\Basic::product(array('error', 1, 2));
    }

    /**
     * @covers NumbersPHP\Basic::square
     */
    public function testSquare()
    {
        $this->assertEquals(
            16,
            \NumbersPHP\Basic::square(4)
        );
    }

    /**
     * @covers NumbersPHP\Basic::binomial
     */
    public function testBinomial()
    {
        $this->assertEquals(
            10,
            \NumbersPHP\Basic::binomial(5, 3),
            'binomial should return the binomial coefficient (n choose k) of two numbers'
        );
    }

    /**
     * @covers NumbersPHP\Basic::factorial
     */
    public function testFactorial()
    {
        $msg = 'factorial should return the product of n * (n - 1) * (n - 2) * ... * 1';
        $this->assertEquals(
            24,
            \NumbersPHP\Basic::factorial(4),
            $msg
        );

        $this->assertEquals(
            120,
            \NumbersPHP\Basic::factorial(5),
            $msg
        );
    }

    /**
     * @covers NumbersPHP\Basic::gcd
     */
    public function testGcd()
    {
        $msg = 'gcd should return the greatest common denominator of two integers';
        $this->assertEquals(
            6,
            \NumbersPHP\Basic::gcd(1254, 5298),
            $msg
        );

        $this->assertEquals(
            1,
            \NumbersPHP\Basic::gcd(78699786, 78978965),
            $msg
        );
    }

    /**
     * @covers NumbersPHP\Basic::lcm
     */
    public function testLcm()
    {
        $this->assertEquals(
            240,
            \NumbersPHP\Basic::lcm(12, 80),
            'lcm should return the least common multiple of two integers'
        );
    }

    /**
     * @covers NumbersPHP\Basic::random
     */
    public function testRandom()
    {
        $this->assertEquals(
            5,
            count(\NumbersPHP\Basic::random(array(10, 20, 30, 40, 50, 60, 70), 5, true)),
            'random should return a specified quantity of elements from an array, at random'
        );

        $this->assertEquals(
            5,
            count(\NumbersPHP\Basic::random(array(10, 20, 30, 40, 50, 60, 70), 5, false)),
            'random should return a specified quantity of elements from an array, at random w/o duplicates'
        );
    }

    /**
     * @covers NumbersPHP\Basic::random
     * @expectedException \Exception
     */
    public function testRandomSize1()
    {
        \NumbersPHP\Basic::random(array(), 0, false);
    }

    /**
     * @covers NumbersPHP\Basic::random
     * @expectedException \Exception
     */
    public function testRandomSize2()
    {
        \NumbersPHP\Basic::random(array(10, 20), 5, false);
    }

    /**
     * @covers NumbersPHP\Basic::shuffle
     */
    public function testShuffle()
    {
        $this->assertTrue(
            arrays_are_similar(
                array(10, 20, 30, 40, 50, 60, 70),
                \NumbersPHP\Basic::shuffle(array(10, 20, 30, 40, 50, 60, 70))
            ),
            'shuffle should return a different version of input array'
        );
    }

    /**
     * @covers NumbersPHP\Basic::max
     */
    public function testMax()
    {
        $this->assertEquals(
            42,
            \NumbersPHP\Basic::max(array(1, 2, 3, 42)),
            'max should return the biggest number in an array'
        );
    }

    /**
     * @covers NumbersPHP\Basic::min
     * @todo   Implement testMin().
     */
    public function testMin()
    {
        $this->assertEquals(
            1,
            \NumbersPHP\Basic::min(array(2, 1, 3, 42)),
            'min should return the smallest number in an array'
        );
    }

    /**
     * @covers NumbersPHP\Basic::range
     */
    public function testRange()
    {
        $msg = 'range should return an appropriate range for the given start, stop, and step parameters';

        $this->assertEquals(
            array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
            \NumbersPHP\Basic::range(1, 10),
            $msg
        );

        $this->assertEquals(
            array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1),
            \NumbersPHP\Basic::range(10, 1),
            $msg
        );

        $this->assertEquals(
            array(1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5),
            \NumbersPHP\Basic::range(1, 5, 0.5),
            $msg
        );

         $this->assertEquals(
             array(5, 4.5, 4, 3.5, 3, 2.5, 2, 1.5, 1),
             \NumbersPHP\Basic::range(5, 1, 0.5),
             $msg
         );
    }


    /**
     * @covers NumbersPHP\Basic::isInt
     */
    public function testIsInt()
    {

        $this->assertFalse(\NumbersPHP\Basic::isInt(2.32));
        $this->assertFalse(\NumbersPHP\Basic::isInt('true'));
        $this->assertTrue(\NumbersPHP\Basic::isInt('2'));
        $this->assertTrue(\NumbersPHP\Basic::isInt(2));
    }

    /**
     * @covers NumbersPHP\Basic::divMod
     */
    public function testDivMod()
    {
        $msg = 'divMod should return an array of both the division and modulus values of two integers';
        $this->assertEquals(
            array(2, 0),
            \NumbersPHP\Basic::divMod(12, 6),
            $msg
        );

        $this->assertEquals(
            array(3, 1),
            \NumbersPHP\Basic::divMod(10, 3),
            $msg
        );
    }

    /**
     * @covers NumbersPHP\Basic::powerMod
     */
    public function testPowerMod()
    {
        $this->assertEquals(
            1,
            \NumbersPHP\Basic::powerMod(1, -1, 5)
        );

        $this->assertEquals(
            1,
            \NumbersPHP\Basic::powerMod(2, 10, 3)
        );

        $this->assertEquals(
            16,
            \NumbersPHP\Basic::powerMod(2, pow(10, 9), 18)
        );

        $this->assertEquals(
            6,
            \NumbersPHP\Basic::powerMod(6, 0.5, 10)
        );

        $this->assertEquals(
            445,
            \NumbersPHP\Basic::powerMod(4, 13, 497)
        );
    }

    /**
     * @covers NumbersPHP\Basic::egcd
     */
    public function testEgcd()
    {
        $msg = 'egcd should return the array [a, x, y] which is the solved linear equation for GCD';

        $this->assertEquals(
            array(5, -3, 5),
            \NumbersPHP\Basic::egcd(65, 40),
            $msg
        );

        $this->assertEquals(
            array(5, 5, -3),
            \NumbersPHP\Basic::egcd(40, 65),
            $msg
        );

        $this->assertEquals(
            array(21, -16, 27),
            \NumbersPHP\Basic::egcd(1239, 735),
            $msg
        );

        $this->assertEquals(
            array(21, 5, -2),
            \NumbersPHP\Basic::egcd(105, 252),
            $msg
        );

        $this->assertEquals(
            array(21, -2, 5),
            \NumbersPHP\Basic::egcd(252, 105),
            $msg
        );
    }

    /**
     * @covers NumbersPHP\Basic::modInverse
     * @expectedException \Exception
     */
    public function testModInverse()
    {
        $this->assertEquals(
            1,
            \NumbersPHP\Basic::modInverse(1, 5),
            'modInverse will return the modulo m inverse of a'
        );

        \NumbersPHP\Basic::modInverse(65, 40);
    }

    /**
     * @covers NumbersPHP\Basic::numbersEqual
     */
    public function testNumbersEqual()
    {
        $this->assertTrue(\NumbersPHP\Basic::numbersEqual(5, 5, \NumbersPHP\Numbers::EPSILON));

        $this->assertTrue(\NumbersPHP\Basic::numbersEqual(5.0001, 5.0000001, \NumbersPHP\Numbers::EPSILON));

        $this->assertFalse(\NumbersPHP\Basic::numbersEqual(-5, 5, \NumbersPHP\Numbers::EPSILON));

        $this->assertFalse(\NumbersPHP\Basic::numbersEqual(5, 5.1, \NumbersPHP\Numbers::EPSILON));

        $this->assertFalse(\NumbersPHP\Basic::numbersEqual(5, 5.001, \NumbersPHP\Numbers::EPSILON));
    }

    /**
     * @covers NumbersPHP\Basic::fallingFactorial
     */
    public function testFallingFactorial()
    {
        $msg = 'fallingFactorial should return correct answers';
        $this->assertEquals(
            1,
            \NumbersPHP\Basic::fallingFactorial(0, 0),
            'allows n = 0'
        );

        $this->assertEquals(
            1,
            \NumbersPHP\Basic::fallingFactorial(7, 0),
            'k = 0 returns 1'
        );


        $this->assertEquals(
            0,
            \NumbersPHP\Basic::fallingFactorial(2, 4),
            'nonsensical k returns 0'
        );


        $this->assertEquals(
            5040,
            \NumbersPHP\Basic::fallingFactorial(7, 7),
            'n = k returns n!'
        );

        $this->assertEquals(
            840,
            \NumbersPHP\Basic::fallingFactorial(7, 4)
        );
    }

    /**
     * @covers NumbersPHP\Basic::fallingFactorial
     * @expectedException \Exception
     */
    public function testFallingFactorialException()
    {
        \NumbersPHP\Basic::fallingFactorial(-2, 5);
    }
}

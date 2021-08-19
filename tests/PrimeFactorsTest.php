<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

/**
 * Test class for Prime Factors
 */
final class PrimeFactorsTest extends TestCase
{
	/** 
	 * Test if an array of prime factors is generated.
	 *
	 * @test
	 * @dataProvider factorsProvider
	 */
	public function testIfGeneratesArrayOfPrimeFactors( $num, $expected ) {
		$prime_factors_obj = new PrimeFactors;

		$factors = $prime_factors_obj->generate( $num );
		
		$this->assertIsArray( $factors );
		$this->assertEquals( $expected, $factors );
	}
	
	/**
	 * Array of prime factors for each number.
	 * 
	 * @return array An array of predefined prime factors for each number.
	 */
	public function factorsProvider() {
		return array(
			array( 2,  array( 2 ) ),
			array( 3,  array( 3 ) ),
			array( 4,  array( 2, 2 ) ),
			array( 5,  array( 5 ) ),
			array( 6,  array( 2, 3 ) ),
			array( 8,  array( 2, 2, 2 ) ),
			array( 99, array( 3, 3, 11 ) ),
		);
	}
}
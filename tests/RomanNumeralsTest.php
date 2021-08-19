<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

/**
 * Test class for Roman Numerals
 */
final class RomanNumeralsTest extends TestCase
{
	/** 
	 * Test if correct roman numeral is generated.
	 *
	 * @test
	 * @dataProvider romanCheckProvider
	 */
	public function testIfGeneratesCorrectRomanNumeral( $num, $expected ) {
		$roman_numerals_obj = new RomanNumerals;

		$result = $roman_numerals_obj->generate( $num );
		
		$this->assertEquals( $expected, $result );
	}
	
	/**
	 * Test if no number is generate for 0 or less.
	 * 
	 */
	public function testCannotGenerateForZeroOrLess() {
	
		$roman_numerals_obj = new RomanNumerals;
		
		$this->assertFalse( $roman_numerals_obj->generate( 0 ) );
		$this->assertFalse( $roman_numerals_obj->generate( -1 ) );
	}
	
	/**
	 * Test if no number is generate for 3999+.
	 */
	public function testCannotGenerateFor4000AndPlus() {
	
		$roman_numerals_obj = new RomanNumerals;
		
		$this->assertFalse( $roman_numerals_obj->generate( 4000 ) );
		$this->assertFalse( $roman_numerals_obj->generate( 4500 ) );
	}
	
	/**
	 * Array of roman equivalent of number.
	 * 
	 * @return array An array of roman equivalent of number.
	 */
	public function romanCheckProvider() {
		return array(
			array( 1,    'I' ),
			array( 3,    'III' ),
			array( 4,    'IV' ),
			array( 5,    'V' ),
			array( 8,    'VIII' ),
			array( 9,    'IX' ),
			array( 49,   'XLIX' ),
			array( 99,   'XCIX' ),
			array( 499,  'CDXCIX' ),
			array( 999,  'CMXCIX' ),
			array( 3999, 'MMMCMXCIX' ),
		);
	}
}
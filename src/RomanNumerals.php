<?php

namespace App;

/**
 * Generate roman numeral for a number.
 */
class RomanNumerals {
	
	/**
	 * Number equivalent of Roman numerals symbols.
	 */
	public const NUMERALS_SYMBOLS = array (
										'M'  => 1000,
										'CM' => 900,
										'D'  => 500,
										'CD' => 400,
										'C'  => 100,
										'XC' => 90,
										'L'  => 50,
										'XL' => 40,
										'X'  => 10,
										'IX' => 9,
										'V'  => 5,
										'IV' => 4,
										'I'  => 1,
									);
	
	/**
	 * Generate roman numeral for a given number.
	 *
	 * @param int $num Number for which roman numeral is required.
	 */
	public function generate ( $num ) {
		if ( $num < 1 || $num > 3999 ) {
			return false;
		}
		
		$result = '';
		
		foreach ( static::NUMERALS_SYMBOLS as $roman => $number ) {
			while ( $num >= $number ) {
				$result .= $roman;
				$num -= $number;
			}
		}
		
		return $result;
	}
	
}
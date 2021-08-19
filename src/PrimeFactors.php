<?php

namespace App;

/**
 * Generate prime factors.
 */
class PrimeFactors {

	/**
	 * Generate prime factors for provided number.
	 *
	 * @param int $num The number for which prime factors are generated.
	 * @return array An array of prime factors.
	 */
	public function generate( $num ) {
		$factors = array();

		for ( $divisor = 2; $num > 1; $divisor++ ) {
			while ( 0 === $num % $divisor ) {
				$factors[] = $divisor;
				
				$num /= $divisor;
			}
		}

		return $factors;
	}

}
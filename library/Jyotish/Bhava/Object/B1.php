<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Bhava\Object;

use Jyotish\Tattva\Jiva\Manusha;

/**
 * Class of bhava 1.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class B1 extends BhavaObject {
	/**
	 * Bhava key
	 * 
	 * @var int
	 */
	protected $bhavaKey = 1;
	
	/**
	 * Indications of bhava.
	 * 
	 * @var array
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 11, Verse 2.
	 */
	protected $bhavaIndications = array(
		'physique',
		'appearance',
		'intellect',
		'vigour',
		'weakness',
		'happiness',
		'grief',
		'innate nature',
	);
	
	/**
	 * Purushartha of bhava.
	 * 
	 * @var string
	 */
	protected $bhavaPurushartha = Manusha::PURUSHARTHA_DHARMA;

	public function __construct($options) {
		parent::__construct($options);
	}

}
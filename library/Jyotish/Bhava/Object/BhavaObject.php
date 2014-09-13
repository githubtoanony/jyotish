<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Bhava\Object;

/**
 * Parent class for bhava objects.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class BhavaObject {
	/**
	 * Bhava key
	 * 
	 * @var int
	 */
	protected $bhavaKey;
	
	/**
	 * Devanagari bhava title in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	protected $bhavaTranslit;
	
	/**
	 * Indications of bhava.
	 * 
	 * @var array
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 11, Verse 2-13.
	 */
	protected $bhavaIndications = array();

	/**
	 * Purushartha of bhava.
	 * 
	 * @var string
	 */
	protected $bhavaPurushartha;
	
	/**
	 * Get bhava purushartha.
	 * 
	 * @return string
	 */
	public function getBhavaPurushartha()
	{
		return $this->bhavaPurushartha;
	}
	
	/**
	 * Constructor
	 * 
     * @param array $options
     */
	public function __construct($options)
	{
		return $this;
	}
}

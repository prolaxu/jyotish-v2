<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Tithi\BaseObject;

use Jyotish\Panchanga\Karana\Karana;

/**
 * Class of tithi 9.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T9 extends TithiObject
{
    /**
     * Tithi key
     * 
     * @var int
     */
    protected $tithiKey = 9;

    /**
     * Devanagari number 9 in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $tithiTranslit = ['d9'];

    /**
     * Karana of tithi.
     * 
     * @var string
     */
    protected $tithiKarana = [
        1 => Karana::NAME_BALAVA,
        2 => Karana::NAME_KAULAVA
    ];
}
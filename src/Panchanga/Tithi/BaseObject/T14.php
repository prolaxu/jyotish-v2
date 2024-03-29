<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Tithi\BaseObject;

use Jyotish\Panchanga\Karana\Karana;

/**
 * Class of tithi 14.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T14 extends TithiObject
{
    /**
     * Tithi key
     * 
     * @var int
     */
    protected $tithiKey = 14;

    /**
     * Devanagari number 14 in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $tithiTranslit = ['d1', 'd4'];

    /**
     * Karana of tithi.
     * 
     * @var string
     */
    protected $tithiKarana = [
        1 => Karana::NAME_GARA,
        2 => Karana::NAME_VANIJA
    ];
}
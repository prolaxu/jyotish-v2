<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Vara\BaseObject;

use Jyotish\Graha\Graha;

/**
 * Guruvar class.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Gu extends VaraObject
{
    /**
     * Vara key.
     * 
     * @var string
     */
    protected $varaKey = Graha::KEY_GU;
}
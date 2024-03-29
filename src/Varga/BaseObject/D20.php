<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Varga\BaseObject;

use Jyotish\Ganita\Math;
use Jyotish\Rashi\Rashi;

/**
 * Class of varga D20.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class D20 extends AbstractVarga
{
    /**
     * Key of the varga.
     * 
     * @var string
     */
    protected $vargaKey = 'D20';

    /**
     * Names of the varga.
     * 
     * @var array
     */
    protected $vargaNames = [
        'Vimshamsha',
    ];

    /**
     * The number of parts.
     * 
     * @var int
     */
    protected $vargaAmsha = 20;

    /**
     * Get varga rashi.
     * 
     * @param array $ganitaRashi
     * @return array
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 6, Verse 17-21.
     */
    public function getVargaRashi(array $ganitaRashi)
    {
        $amshaSize = 30 / $this->vargaAmsha;
        $result = Math::partsToUnits($ganitaRashi['degree'], $amshaSize, 'floor');
        
        $vargaRashi = [];
        $vargaRashi['degree'] = $result['parts'] * 30 / $amshaSize;

        $rashiObject = Rashi::getInstance((int) $ganitaRashi['rashi']);
        $rashiBhava = $rashiObject->rashiBhava;

        switch ($rashiBhava) {
            case Rashi::BHAVA_CHARA:
                $vargaRashi['rashi'] = Math::numberInCycle(1 + $result['units']);
                break;
            case Rashi::BHAVA_STHIRA:
                $vargaRashi['rashi'] = Math::numberInCycle(9 + $result['units']);
                break;
            case Rashi::BHAVA_DVISVA:
                $vargaRashi['rashi'] = Math::numberInCycle(5 + $result['units']);
                break;
        }

        return $vargaRashi;
    }
}
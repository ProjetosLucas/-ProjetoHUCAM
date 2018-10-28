<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Arrow Entity
 *
 * @property int $id
 * @property int $x1
 * @property int $y1
 * @property int $x2
 * @property int $y2
 * @property string $color
 * @property int $image_id
 *
 * @property \App\Model\Entity\Image $image
 */
class Arrow extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'x1' => true,
        'y1' => true,
        'x2' => true,
        'y2' => true,
        'color' => true,
        'image_id' => true,
        'image' => true
    ];
}

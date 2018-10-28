<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ellipse Entity
 *
 * @property int $id
 * @property int $center_x
 * @property int $center_y
 * @property int $axis_one
 * @property int $axis_two
 * @property int $image_id
 * @property string $color
 *
 * @property \App\Model\Entity\Image $image
 */
class Ellipse extends Entity
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
        'center_x' => true,
        'center_y' => true,
        'axis_one' => true,
        'axis_two' => true,
        'image_id' => true,
        'color' => true,
        'image' => true
    ];
}

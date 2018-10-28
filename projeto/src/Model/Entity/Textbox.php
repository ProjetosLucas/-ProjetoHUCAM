<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Textbox Entity
 *
 * @property int $id
 * @property int $x
 * @property int $y
 * @property string $text
 * @property int $image_id
 * @property string $color
 *
 * @property \App\Model\Entity\Image $image
 */
class Textbox extends Entity
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
        'x' => true,
        'y' => true,
        'text' => true,
        'image_id' => true,
        'color' => true,
        'image' => true
    ];
}

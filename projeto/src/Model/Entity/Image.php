<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Image Entity
 *
 * @property int $id
 * @property string $name
 * @property string $file_name
 * @property string $description
 * @property int $image_type_id
 * @property int $disease_id
 * @property int $patient_id
 *
 * @property \App\Model\Entity\ImageType $image_type
 * @property \App\Model\Entity\Disease $disease
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\Arrow[] $arrows
 * @property \App\Model\Entity\Ellipse[] $ellipses
 * @property \App\Model\Entity\Textbox[] $textboxes
 */
class Image extends Entity
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
        'name' => true,
        'file_name' => true,
        'description' => true,
        'image_type_id' => true,
        'disease_id' => true,
        'patient_id' => true,
        'image_type' => true,
        'disease' => true,
        'patient' => true,
        'arrows' => true,
        'ellipses' => true,
        'textboxes' => true
    ];
}

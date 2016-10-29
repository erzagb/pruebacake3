<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cantone Entity
 *
 * @property string $nombre_canton
 * @property string $codigo_canton
 * @property string $nombre_provincia
 */
class Cantone extends Entity
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
        '*' => true,
        'nombre_canton' => false,
        'nombre_provincia' => false
    ];
}

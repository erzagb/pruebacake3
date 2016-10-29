<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sede Entity
 *
 * @property string $codigo_sede
 * @property string $nombre_sede
 * @property string $direccion
 * @property string $nombre_provincia
 * @property string $nombre_canton
 * @property string $nombre_distrito
 */
class Sede extends Entity
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
        'codigo_sede' => false
    ];
}

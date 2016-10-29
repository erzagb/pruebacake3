<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Direccione Entity
 *
 * @property string $codigo
 * @property string $nombre_provincia
 * @property string $nombre_canton
 * @property string $nombre_distrito
 * @property string $tipo
 * @property string $direccion
 */
class Direccione extends Entity
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
        'codigo' => false,
        'tipo' => false
    ];
}

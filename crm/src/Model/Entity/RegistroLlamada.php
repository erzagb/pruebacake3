<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegistroLlamada Entity
 *
 * @property string $codigo_llamada
 * @property string $codigo_colegiado
 * @property \Cake\I18n\Time $fecha_llamada
 * @property string $llamo
 * @property string $volver_llamar
 * @property string $descripcion
 */
class RegistroLlamada extends Entity
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
        'codigo_llamada' => false
    ];
}

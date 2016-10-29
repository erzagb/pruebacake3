<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sugerencia Entity
 *
 * @property string $codigo_sugerencia
 * @property string $codigo_profesor
 * @property string $codigo_colegiado
 * @property string $codigo_sede
 * @property string $codigo_curso
 * @property string $tipo
 * @property string $fecha
 * @property string $descripcion
 */
class Sugerencia extends Entity
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
        'codigo_sugerencia' => false
    ];
}

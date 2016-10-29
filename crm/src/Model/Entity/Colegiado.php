<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
* Colegiado Entity
* 
* @property string $nombre_colegiado
* @property string $apellidos_colegiado
* @property int $cedula_colegiado
* @property int $carne_colegiado
* @property string $direccion_residencia
* @property string $direccion_oficina
* @property string $email_oficina
* @property string $email_personal
* @property int $telefono_celular
* @property int $telefono_oficina
* @property int $telefono_residencia
* 
*/

class Colegiado extends Entity{
    
    protected $_accessible = [
        '*' => true,
        'carne' => false
    ];
    
}
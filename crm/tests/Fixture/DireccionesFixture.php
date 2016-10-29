<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DireccionesFixture
 *
 */
class DireccionesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_provincia' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_canton' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_distrito' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'direccion' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'nombre_provincia' => ['type' => 'index', 'columns' => ['nombre_provincia', 'nombre_canton', 'nombre_distrito'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo', 'tipo'], 'length' => []],
            'direcciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['codigo'], 'references' => ['personas', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'direcciones_ibfk_2' => ['type' => 'foreign', 'columns' => ['nombre_provincia', 'nombre_canton', 'nombre_distrito'], 'references' => ['distritos', '1' => ['nombre_provincia', 'nombre_canton', 'nombre_distrito']], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'codigo' => 'b60f6ecb-a461-4c9e-ba7b-b3ef80a273a4',
            'nombre_provincia' => 'Lorem ipsum d',
            'nombre_canton' => 'Lorem ipsum d',
            'nombre_distrito' => 'Lorem ipsum d',
            'tipo' => '691bc1f0-b44d-4bc1-ae13-d29b3ac30501',
            'direccion' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}

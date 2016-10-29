<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DistritosFixture
 *
 */
class DistritosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'nombre_distrito' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_distrito' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_canton' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_provincia' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'nombre_canton' => ['type' => 'index', 'columns' => ['nombre_canton'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['nombre_provincia', 'nombre_canton', 'nombre_distrito'], 'length' => []],
            'distritos_ibfk_1' => ['type' => 'foreign', 'columns' => ['nombre_provincia'], 'references' => ['provincias', 'nombre_provincia'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'distritos_ibfk_2' => ['type' => 'foreign', 'columns' => ['nombre_canton'], 'references' => ['cantones', 'nombre_canton'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'nombre_distrito' => '6d62d2f2-f158-45be-8a57-8a8b2ff44e56',
            'codigo_distrito' => 'Lor',
            'nombre_canton' => '3dabea35-1286-4e63-930e-7fea0607f045',
            'nombre_provincia' => '61c605bf-8fa7-4e2d-9c72-b96a1e205f15'
        ],
    ];
}

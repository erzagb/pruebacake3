<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CantonesFixture
 *
 */
class CantonesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'nombre_canton' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_canton' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_provincia' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'nombre_provincia' => ['type' => 'index', 'columns' => ['nombre_provincia'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['nombre_canton', 'nombre_provincia'], 'length' => []],
            'cantones_ibfk_1' => ['type' => 'foreign', 'columns' => ['nombre_provincia'], 'references' => ['provincias', 'nombre_provincia'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'nombre_canton' => 'c3ec5aa4-316d-4699-a8ac-c299e6b9b1fd',
            'codigo_canton' => 'Lor',
            'nombre_provincia' => 'a521f53a-9479-404c-8c1b-45d2efc5fc2c'
        ],
    ];
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuejasFixture
 *
 */
class QuejasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo_queja' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_colegiado' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_profesor' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_curso' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'codigo_colegiado' => ['type' => 'index', 'columns' => ['codigo_colegiado'], 'length' => []],
            'codigo_profesor' => ['type' => 'index', 'columns' => ['codigo_profesor'], 'length' => []],
            'codigo_curso' => ['type' => 'index', 'columns' => ['codigo_curso'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo_queja'], 'length' => []],
            'quejas_ibfk_1' => ['type' => 'foreign', 'columns' => ['codigo_colegiado'], 'references' => ['colegiados', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quejas_ibfk_2' => ['type' => 'foreign', 'columns' => ['codigo_profesor'], 'references' => ['profesores', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quejas_ibfk_3' => ['type' => 'foreign', 'columns' => ['codigo_curso'], 'references' => ['cursos', 'codigo_curso'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'codigo_queja' => '0e96fbab-2a20-46c4-bf42-bd3285c85e56',
            'codigo_colegiado' => 'Lorem ip',
            'codigo_profesor' => 'Lorem ip',
            'codigo_curso' => 'Lorem ip',
            'tipo' => 'Lorem ip',
            'descripcion' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}

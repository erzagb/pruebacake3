<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SugerenciasFixture
 *
 */
class SugerenciasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo_sugerencia' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_profesor' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_colegiado' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_sede' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_curso' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'codigo_profesor' => ['type' => 'index', 'columns' => ['codigo_profesor'], 'length' => []],
            'codigo_colegiado' => ['type' => 'index', 'columns' => ['codigo_colegiado'], 'length' => []],
            'codigo_sede' => ['type' => 'index', 'columns' => ['codigo_sede'], 'length' => []],
            'codigo_curso' => ['type' => 'index', 'columns' => ['codigo_curso'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo_sugerencia'], 'length' => []],
            'sugerencias_ibfk_1' => ['type' => 'foreign', 'columns' => ['codigo_profesor'], 'references' => ['profesores', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sugerencias_ibfk_2' => ['type' => 'foreign', 'columns' => ['codigo_colegiado'], 'references' => ['colegiados', 'codigo'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sugerencias_ibfk_3' => ['type' => 'foreign', 'columns' => ['codigo_sede'], 'references' => ['sedes', 'codigo_sede'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sugerencias_ibfk_4' => ['type' => 'foreign', 'columns' => ['codigo_curso'], 'references' => ['cursos', 'codigo_curso'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'codigo_sugerencia' => '0781a1d2-d5b5-46c4-aa7e-2da6947651b3',
            'codigo_profesor' => 'Lor',
            'codigo_colegiado' => 'Lor',
            'codigo_sede' => 'Lorem ip',
            'codigo_curso' => 'Lorem ip',
            'tipo' => 'Lorem ip',
            'fecha' => 'Lorem ipsum dolor sit amet',
            'descripcion' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}

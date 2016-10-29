<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sugerencias Model
 *
 * @method \App\Model\Entity\Sugerencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sugerencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sugerencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sugerencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sugerencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sugerencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sugerencia findOrCreate($search, callable $callback = null)
 */
class SugerenciasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('sugerencias');
        $this->displayField('codigo_sugerencia');
        $this->primaryKey('codigo_sugerencia');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('codigo_sugerencia', 'create');

        $validator
            ->allowEmpty('codigo_profesor');

        $validator
            ->allowEmpty('codigo_colegiado');

        $validator
            ->allowEmpty('codigo_sede');

        $validator
            ->allowEmpty('codigo_curso');

        $validator
            ->allowEmpty('tipo');

        $validator
            ->allowEmpty('fecha');

        $validator
            ->allowEmpty('descripcion');

        return $validator;
    }
}

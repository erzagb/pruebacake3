<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quejas Model
 *
 * @method \App\Model\Entity\Queja get($primaryKey, $options = [])
 * @method \App\Model\Entity\Queja newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Queja[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Queja|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Queja patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Queja[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Queja findOrCreate($search, callable $callback = null)
 */
class QuejasTable extends Table
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

        $this->table('quejas');
        $this->displayField('codigo_queja');
        $this->primaryKey('codigo_queja');
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
            ->allowEmpty('codigo_queja', 'create');

        $validator
            ->allowEmpty('codigo_colegiado');

        $validator
            ->allowEmpty('codigo_profesor');

        $validator
            ->allowEmpty('codigo_curso');

        $validator
            ->allowEmpty('tipo');

        $validator
            ->allowEmpty('descripcion');

        return $validator;
    }
}

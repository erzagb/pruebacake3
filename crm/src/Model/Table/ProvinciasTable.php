<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Provincias Model
 *
 * @method \App\Model\Entity\Provincia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Provincia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Provincia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Provincia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Provincia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Provincia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Provincia findOrCreate($search, callable $callback = null)
 */
class ProvinciasTable extends Table
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

        $this->table('provincias');
        $this->displayField('nombre_provincia');
        $this->primaryKey('nombre_provincia');
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
            ->allowEmpty('nombre_provincia', 'create');

        $validator
            ->requirePresence('codigo_provincia', 'create')
            ->notEmpty('codigo_provincia');

        return $validator;
    }
}

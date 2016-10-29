<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesores Model
 *
 * @method \App\Model\Entity\Profesore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profesore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profesore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profesore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profesore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profesore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profesore findOrCreate($search, callable $callback = null)
 */
class ProfesoresTable extends Table
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

        $this->table('profesores');
        $this->displayField('codigo');
        $this->primaryKey('codigo');
        
        $this->belongsTo('personas');
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
            ->allowEmpty('codigo', 'create');

        $validator
            ->allowEmpty('especialidad');

        return $validator;
    }
}

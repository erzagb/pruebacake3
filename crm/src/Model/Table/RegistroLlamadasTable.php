<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistroLlamadas Model
 *
 * @method \App\Model\Entity\RegistroLlamada get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistroLlamada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegistroLlamada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistroLlamada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistroLlamada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroLlamada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroLlamada findOrCreate($search, callable $callback = null)
 */
class RegistroLlamadasTable extends Table
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

        $this->table('registro_llamadas');
        $this->displayField('codigo_llamada');
        $this->primaryKey('codigo_llamada');
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
            ->allowEmpty('codigo_llamada', 'create');

        $validator
            ->allowEmpty('codigo_colegiado');

        $validator
            ->date('fecha_llamada')
            ->allowEmpty('fecha_llamada');

        $validator
            ->allowEmpty('llamo');

        $validator
            ->allowEmpty('volver_llamar');

        $validator
            ->allowEmpty('descripcion');

        return $validator;
    }
}

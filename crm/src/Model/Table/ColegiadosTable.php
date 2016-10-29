<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
* Colegiados Model
* 
* @method \App\Model\Entity\Colegiado get($primaryKey, $options = [])
* @method \App\Model\Entity\Colegiado newEntity($data = null, array $options = [])
* @method \App\Model\Entity\Colegiado[] newEntities(array $data, array $options = [])
* 
*/

class ColegiadosTable extends Table{
    
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    
    public function initialize(array $config){
        parent::initialize($config);
        
        $this->table('colegiados');
        $this->displayField('carne_colegiado');
        $this->primaryKey('carne_colegiado');
        
        $this->belongsTo('personas');
        
    }
    
     /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validation $validator){
       $validator
            
            ->notEmpty('nombre_colegiado');
            
        $validator
            
            ->notEmpty('apellidos_colegiado');
            
        $validator
            
            ->notEmpty('cedula_colegiado');
            
        $validator
            
            ->notEmpty('carne_colegiado');
            
        $validator
           
            ->string('direccion_residencia')
            ->allowEmpty('direccion_residencia');
            
        $validator
           
            ->string('direccion_oficina')
            ->allowEmpty('direccion_oficina');
            
      
        
    }
    
    
}
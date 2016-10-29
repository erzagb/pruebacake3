<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RegistrodeLlamadas Controller
 *
 * @property \App\Model\Table\RegistrodeLlamadasTable $RegistrodeLlamadas
 */
class RegistrodeLlamadasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $registrodeLlamadas = $this->paginate($this->RegistrodeLlamadas);

        $this->set(compact('registrodeLlamadas'));
        $this->set('_serialize', ['registrodeLlamadas']);
    }
    
    public function agregar()
    {
        $user = $this->RegistrodeLlamadas->newEntity();
       
       $this->set(compact('registrodeLlamadas'));
    }
    
    public function editar()
    {
        $user = $this->RegistrodeLlamadas->newEntity();
       
       $this->set(compact('registrodeLlamadas'));
    }
    
    public function ver()
    {
        $user = $this->RegistrodeLlamadas->newEntity();
       
       $this->set(compact('registrodeLlamadas'));
    }

    /**
     * View method
     *
     * @param string|null $id Registrode Llamada id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
     
     /**
    public function view($id = null)
    {
        $registrodeLlamada = $this->RegistrodeLlamadas->get($id, [
            'contain' => []
        ]);

        $this->set('registrodeLlamada', $registrodeLlamada);
        $this->set('_serialize', ['registrodeLlamada']);
    }
    */

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrodeLlamada = TableRegistry::get('registro_llamadas');
        $colegiado = TableRegistry::get('colegiados');
        $sede = TableRegistry::get('sedes');
        
        $query = $registrodeLlamada->query();
        
        $carne = $this->request->data('carne');
        $categoria = $this->request->data('CategoriaColegiado');
        $sede = $this->request->data('Sede');
        $fecha = $this->request->data('registration_date');
        $contestado = $this->request->data('contesto');
        $llamar = $this->request->data('llamar');
        $comentario = $this->request->data('ComRegistro');
        
        $query->insert(['carne_colegiado', 'categoria_colegiado', 'sede', 'fecha_llamada', 'llamo', 'volver_llamar', 'descripcion'])
        ->values([
            'carne_colegiado' => $carne,
            'categoria_colegiado' => $categoria,
            'sede' => $sede,
            'fecha_llamada' => $fecha,
            'llamo' => $contestado,
            'volver_llamar' => $llamar,
            'descripcion' => $comentario,
        ])
        ->execute();
        
        if($query){
            $this->Flash->success(__('El registro de llamada ha sido almacenado.'));

                return $this->redirect(['action' => 'agregar']);
            } else {
                $this->Flash->error(__('El registro de llamada no pudo ser almacenado. Por favor intente de nuevo.'));
            }
        }
        
        /**
        $registrodeLlamada = $this->RegistrodeLlamadas->newEntity();
        if ($this->request->is('post')) {
            $registrodeLlamada = $this->RegistrodeLlamadas->patchEntity($registrodeLlamada, $this->request->data);
            if ($this->RegistrodeLlamadas->save($registrodeLlamada)) {
                $this->Flash->success(__('The registrode llamada has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The registrode llamada could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('registrodeLlamada'));
        $this->set('_serialize', ['registrodeLlamada']);
        */
    }

    
    /**
     * Edit method
     *
     * @param string|null $id Registrode Llamada id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
     
    /**
    public function edit($id = null)
    {
        $registrodeLlamada = $this->RegistrodeLlamadas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrodeLlamada = $this->RegistrodeLlamadas->patchEntity($registrodeLlamada, $this->request->data);
            if ($this->RegistrodeLlamadas->save($registrodeLlamada)) {
                $this->Flash->success(__('The registrode llamada has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The registrode llamada could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('registrodeLlamada'));
        $this->set('_serialize', ['registrodeLlamada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Registrode Llamada id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
     
    /**
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrodeLlamada = $this->RegistrodeLlamadas->get($id);
        if ($this->RegistrodeLlamadas->delete($registrodeLlamada)) {
            $this->Flash->success(__('The registrode llamada has been deleted.'));
        } else {
            $this->Flash->error(__('The registrode llamada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    */


<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quejas Controller
 *
 * @property \App\Model\Table\QuejasTable $Quejas
 */
class QuejasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $quejas = $this->paginate($this->Quejas);

        $this->set(compact('quejas'));
        $this->set('_serialize', ['quejas']);
    }
    
    public function agregar()
    {
        $user = $this->Quejas->newEntity();
       
       $this->set(compact('quejas'));
    }
    
    public function editar()
    {
        $user = $this->Quejas->newEntity();
       
       $this->set(compact('quejas'));
    }
    
    public function ver()
    {
        $user = $this->Quejas->newEntity();
       
       $this->set(compact('quejas'));
    }
    
   

    /**
     * View method
     *
     * @param string|null $id Queja id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $queja = $this->Quejas->get($id, [
            'contain' => []
        ]);

        $this->set('queja', $queja);
        $this->set('_serialize', ['queja']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       $queja = TableRegistry::get('quejas');
        //Se hacen tantas querys como inserts se necesiten hacer,por ejemplo $query2 = $profesor->query3();  $query3 = $sedes->query3();
        $query = $queja->query();
        
        
        $Colegiado= $this->request->data('nombreColegiado');
        $carne= $this->request->data('carne');
        $tipo= $this->request->data('tipo');
        $codigoProfesor= $this->request->data('codigoProfesor');
        $codigoCurso= $this->request->data('curso');
        $descripcion= $this->request->data('descripcion')
        ;
        
         
         $query->insert(['codigo_colegiado','codigo_profesor', 'codigo_curso','tipo','descripcion'])
        ->values([
        'codigo_profesor'=>$codigoProfesor,
        'codigo_colegiado'=>$carne,
        'codigo_curso'=>$codigoCurso,
        'tipo'=>$tipo,
        'descripcion'=>$descripcion
        ])
        
        
        
    ->execute();
          
    if ($query) {
                $this->Flash->success(__('La queja ha sido agregada.'));

                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('La queja no se ha podido almacenar. Por favor,intente de nuevo.'));
            }
    
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Queja id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $queja = $this->Quejas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $queja = $this->Quejas->patchEntity($queja, $this->request->data);
            if ($this->Quejas->save($queja)) {
                $this->Flash->success(__('The queja has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The queja could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('queja'));
        $this->set('_serialize', ['queja']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Queja id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $queja = $this->Quejas->get($id);
        if ($this->Quejas->delete($queja)) {
            $this->Flash->success(__('The queja has been deleted.'));
        } else {
            $this->Flash->error(__('The queja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

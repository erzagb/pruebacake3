<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colegiado Controller
 *
 * @property \App\Model\Table\ColegiadoTable $Colegiado
 */
class ColegiadoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $colegiado = $this->paginate($this->Colegiado);

        $this->set(compact('colegiado'));
        $this->set('_serialize', ['colegiado']);
    }
    
    
     public function agregar()
    {
        $user = $this->Colegiado->newEntity();
       
       $this->set(compact('colegiado'));
    }
    
    public function editar()
    {
        $user = $this->Colegiado->newEntity();
       
       $this->set(compact('colegiado'));
    }
    
    public function eliminar()
    {
        $user = $this->Colegiado->newEntity();
       
       $this->set(compact('colegiado'));
    }
    
    public function ver()
    {
        $user = $this->Colegiado->newEntity();
       
       $this->set(compact('colegiado'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Colegiado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colegiado = $this->Colegiado->get($id, [
            'contain' => []
        ]);

        $this->set('colegiado', $colegiado);
        $this->set('_serialize', ['colegiado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colegiado = $this->Colegiado->newEntity();
        if ($this->request->is('post')) {
            $colegiado = $this->Colegiado->patchEntity($colegiado, $this->request->data);
            if ($this->Colegiado->save($colegiado)) {
                $this->Flash->success(__('The colegiado has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The colegiado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('colegiado'));
        $this->set('_serialize', ['colegiado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Colegiado id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colegiado = $this->Colegiado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colegiado = $this->Colegiado->patchEntity($colegiado, $this->request->data);
            if ($this->Colegiado->save($colegiado)) {
                $this->Flash->success(__('The colegiado has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The colegiado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('colegiado'));
        $this->set('_serialize', ['colegiado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Colegiado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colegiado = $this->Colegiado->get($id);
        if ($this->Colegiado->delete($colegiado)) {
            $this->Flash->success(__('The colegiado has been deleted.'));
        } else {
            $this->Flash->error(__('The colegiado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

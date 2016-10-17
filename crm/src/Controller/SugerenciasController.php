<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sugerencias Controller
 *
 * @property \App\Model\Table\SugerenciasTable $Sugerencias
 */
class SugerenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sugerencias = $this->paginate($this->Sugerencias);

        $this->set(compact('sugerencias'));
        $this->set('_serialize', ['sugerencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Sugerencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sugerencia = $this->Sugerencias->get($id, [
            'contain' => []
        ]);

        $this->set('sugerencia', $sugerencia);
        $this->set('_serialize', ['sugerencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sugerencia = $this->Sugerencias->newEntity();
        if ($this->request->is('post')) {
            $sugerencia = $this->Sugerencias->patchEntity($sugerencia, $this->request->data);
            if ($this->Sugerencias->save($sugerencia)) {
                $this->Flash->success(__('The sugerencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sugerencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sugerencia'));
        $this->set('_serialize', ['sugerencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sugerencia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sugerencia = $this->Sugerencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sugerencia = $this->Sugerencias->patchEntity($sugerencia, $this->request->data);
            if ($this->Sugerencias->save($sugerencia)) {
                $this->Flash->success(__('The sugerencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sugerencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sugerencia'));
        $this->set('_serialize', ['sugerencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sugerencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sugerencia = $this->Sugerencias->get($id);
        if ($this->Sugerencias->delete($sugerencia)) {
            $this->Flash->success(__('The sugerencia has been deleted.'));
        } else {
            $this->Flash->error(__('The sugerencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

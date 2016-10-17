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
        $queja = $this->Quejas->newEntity();
        if ($this->request->is('post')) {
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

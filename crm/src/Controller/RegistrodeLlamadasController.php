<?php
namespace App\Controller;

use App\Controller\AppController;

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

    /**
     * View method
     *
     * @param string|null $id Registrode Llamada id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrodeLlamada = $this->RegistrodeLlamadas->get($id, [
            'contain' => []
        ]);

        $this->set('registrodeLlamada', $registrodeLlamada);
        $this->set('_serialize', ['registrodeLlamada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
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
    }

    /**
     * Edit method
     *
     * @param string|null $id Registrode Llamada id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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
}

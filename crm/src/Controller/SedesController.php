<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Sedes Controller
 *
 * @property \App\Model\Table\SedesTable $Sedes
 */
class SedesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sedes = $this->paginate($this->Sedes);

        $this->set(compact('sedes'));
        $this->set('_serialize', ['sedes']);
    }
    
    public function agregar()
    {
        $user = $this->Sedes->newEntity();
       
       $this->set(compact('sedes'));
    }
    
    public function editar()
    {
        $user = $this->Sedes->newEntity();
       
       $this->set(compact('sedes'));
    }
    
    public function ver()
    {
        $user = $this->Sedes->newEntity();
       
       $this->set(compact('sedes'));
    }

    /**
     * View method
     *
     * @param string|null $id Sede id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sede = $this->Sedes->get($id, [
            'contain' => []
        ]);

        $this->set('sede', $sede);
        $this->set('_serialize', ['sede']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    { $sedes = TableRegistry::get('sedes');
        $query1 = $sedes->query();
        $nombreSede= $this->request->data('nombre');
        $codigo= $this->request->data('codigo');
        $provincia= $this->request->data('provincia');
        $canton= $this->request->data('canton');
        $distrito= $this->request->data('distrito');
        $direccion= $this->request->data('direccion');
        $celular= $this->request->data('Telefono_celular');
        $telOf= $this->request->data('Teléfono_oficina');
        
        //Falta insertar cursos que esta impartiendo actualmente
        
        if($codigo!=''){
        
        $query1->insert(['codigo_sede','nombre_sede','direccion','nombre_provincia','nombre_canton','nombre_distrito'])
        ->values([
        'codigo_sede' => $codigo,
        'nombre_sede' => $nombreSede,
        'direccion' => $direccion,
        'nombre_provincia' => 'San José',
        'nombre_canton' => 'San José',
        'nombre_distrito' => 'Zapote',
        'telefono1' => $celular,
        'telefono2' => $telOf,
        
        ])
    ->execute();}
    
        
        
    /*
    
    $query3->insert(['codigo','tipo','telefono'])
        ->values([
        'codigo' => $codigo,
        'tipo' => 'Celular',
        'telefono' =>  $celular,
        ])
    ->execute();
    
    $query4->insert(['codigo','tipo','telefono'])
        ->values([
        'codigo' => $codigo,
        'tipo' => 'Telefono de oficina',
        'telefono' =>  $telOf,
        ])
    ->execute();
        
    
    */
    if ($query1) {
                $this->Flash->success(__('La sede ha sido agregada.'));

                return $this->redirect(['action' => 'agregar']);
            } else {
                $this->Flash->error(__('La sede no se pudo guardar.'));
            }
    }

    /**
     * Edit method
     *
     * @param string|null $id Sede id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sede = $this->Sedes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sede = $this->Sedes->patchEntity($sede, $this->request->data);
            if ($this->Sedes->save($sede)) {
                $this->Flash->success(__('The sede has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sede could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sede'));
        $this->set('_serialize', ['sede']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sede id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sede = $this->Sedes->get($id);
        if ($this->Sedes->delete($sede)) {
            $this->Flash->success(__('The sede has been deleted.'));
        } else {
            $this->Flash->error(__('The sede could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

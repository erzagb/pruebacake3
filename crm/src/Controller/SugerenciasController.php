<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
    
     public function agregar()
    {
        $user = $this->Sugerencias->newEntity();
       
       $this->set(compact('sugerencias'));
    }
    
    public function editar()
    {
        $user = $this->Sugerencias->newEntity();
       
       $this->set(compact('sugerencias'));
    }
    
    public function ver()
    {
        $user = $this->Sugerencias->newEntity();
       
       $this->set(compact('sugerencias'));
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
       $sugerencia = TableRegistry::get('sugerencias');
        //Se hacen tantas querys como inserts se necesiten hacer,por ejemplo $query2 = $profesor->query3();  $query3 = $sedes->query3();
        $query = $sugerencia->query();
        
        
        $tipo= $this->request->data('tipo');
        $Colegiado= $this->request->data('nombre');
        $carne= $this->request->data('carne');
        $fecha= $this->request->data('fecha');
        $sede= $this->request->data('sede');
        $curso= $this->request->data('curso');
        $profesor= $this->request->data('profesor');
        $descripcion= $this->request->data('descripcion')
        ;
        
         //  $query->insert(['codigo_profesor','codigo_colegiado', 'codigo_sede','codigo_curso','tipo','fecha','descripcion'])
        $query->insert(['tipo','fecha','descripcion'])
        ->values([
        'codigo_profesor'=>'',//$profesor
        'codigo_colegiado'=>'', //$carne
        'codigo_sede'=>'',//$sede
        'codigo_curso'=>'',//$curso
        'tipo'=>$tipo,
        'fecha'=>$fecha,
        'descripcion'=>$descripcion
        ])
        
        
        
    ->execute();
          
    if ($query) {
                $this->Flash->success(__('La sugerencia ha sido agregada.'));

                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('La sugerencia no se ha podido almacenar. Por favor,intente de nuevo.'));
            }
    
        
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

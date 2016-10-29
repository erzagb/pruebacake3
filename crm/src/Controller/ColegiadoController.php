<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
     /*
    public function view($id = null)
    {
        $colegiado = $this->Colegiado->get($id, [
            'contain' => []
        ]);

        $this->set('colegiado', $colegiado);
        $this->set('_serialize', ['colegiado']);
    }
*/
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    
        $colegiado = TableRegistry::get('colegiados');
        $telefono = TableRegistry::get('telefonos');
        $persona = TableRegistry::get('personas');
        $direccion = TableRegistry::get('direcciones');
        $email = TableRegistry::get('emails');
        $query1 = $persona->query();
        $query2 = $colegiado->query();
        $query3 = $telefono->query();
        $query4 = $telefono->query();
        $query5 = $telefono->query();
        $query6 = $direccion->query();
        $query7 = $direccion->query();
        $query8 = $email->query();
        $query9 = $email->query();
       = $this->request->data('nombre');
        $apellidos = $this->request->data('ApellidosColegiado');
        $cedula= $this->request->data('CedulaColegiado');
        $codigo= $this->request->data('CarneColegiado');
        $dirRes= $this->request->data('DirResidencia');
        $dirOf= $this->request->data('DirOficiona');
        $correo1= $this->request->data('correo1');
        $correo2= $this->request->data('Correo2');
        $celular= $this->request->data('Telefono_celular');
        $telOf= $this->request->data('Teléfono_oficina');
        $telRes= $this->request->data('Teléfono_Residencia');
        $sede= $this->request->data('Sede');
        $moroso= $this->request->data('moroso');
        
        if($codigo!=''){
        
        $query1->insert(['codigo','nombre','apellidos','cedula'])
        ->values([
        'codigo' => $codigo,
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'cedula' => $cedula,
        
        ])
    ->execute();
    
        
        $query2->insert(['codigo','moroso','sede'])
        ->values([
        'codigo' => $codigo,
        'moroso' => $moroso,
        'sede' => $sede,
        ])
    ->execute();
    
    
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
    
    $query5->insert(['codigo','tipo','telefono'])
        ->values([
        'codigo' => $codigo,
        'tipo' => 'Telefono de residencia',
        'telefono' =>  $telRes,
        ])
    ->execute();
    
    if($dirRes!=''){
    
    $query6->insert(['codigo','tipo','direccion'])
        ->values([
        'codigo' => $codigo,
        'tipo' =>  'Direccion de residencia',
        'direccion' =>  $dirRes,
        ])
    ->execute();
    }
    
    if($dirOf!=''){
    
    $query7->insert(['codigo','tipo','direccion'])
        ->values([
        'codigo' => $codigo,
        'tipo' =>  'Direccion de oficina',
        'direccion' =>  $dirOf,
        ])
    ->execute();
    }
    
    $query8->insert(['codigo','tipo','email'])
        ->values([
        'codigo' => $codigo,
        'tipo' =>  'Correo oficina',
        'email' =>  $correo1,
        ])
    ->execute();
    
    $query9->insert(['codigo','tipo','email'])
        ->values([
        'codigo' => $codigo,
        'tipo' =>  'Correo personal',
        'email' =>  $correo2,
        ])
    ->execute();
    
        }
    
    
    if ($query1) {
                $this->Flash->success(__('The colegiado has been saved.'));

                return $this->redirect(['action' => 'agregar']);
            } else {
                $this->Flash->error(__('The colegiado could not be saved. Please, try again.'));
            }
    
        
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
     /*
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
    }*/
}
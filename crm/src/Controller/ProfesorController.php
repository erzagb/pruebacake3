<?php 
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Profesor Controller
 *
 * @property \App\Model\Table\ProfesorTable $Profesor
 */
class ProfesorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $profesor = $this->paginate($this->Profesor);

        $this->set(compact('profesor'));
        $this->set('_serialize', ['profesor']);
    }
    
    public function agregar()
    {
        $user = $this->Profesor->newEntity();
       
       $this->set(compact('profesor'));
    }
    
    public function editar()
    {
        $user = $this->Profesor->newEntity();
       
       $this->set(compact('profesor'));
    }
    
    public function eliminar()
    {
        $user = $this->Profesor->newEntity();
       
       $this->set(compact('profesor'));
    }
    
    public function ver()
    {
        $user = $this->Profesor->newEntity();
       
       $this->set(compact('profesor'));
    }
    
    
    /**
     * View method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profesor = $this->Profesor->get($id, [
            'contain' => []
        ]);

        $this->set('profesor', $profesor);
        $this->set('_serialize', ['profesor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profesor = TableRegistry::get('profesores');
        $telefono = TableRegistry::get('telefonos');
        $persona = TableRegistry::get('personas');
        $direccion = TableRegistry::get('direcciones');
        $email = TableRegistry::get('emails');
        $query1 = $persona->query();
        $query2 = $profesor->query();
        $query3 = $telefono->query();
        $query4 = $telefono->query();
        $query5 = $telefono->query();
        $query6 = $direccion->query();
        $query7 = $direccion->query();
        $query8 = $email->query();
        $query9 = $email->query();
        $nombre= $this->request->data('nombre');
        $apellidos = $this->request->data('ApellidosProfesor');
        $cedula= $this->request->data('CedulaProfesor');
        $codigo= $this->request->data('Carné_del_profesor');
        $dirRes= $this->request->data('DirResidencia');
        $dirOf= $this->request->data('DirOficina');
        $correo1= $this->request->data('correo1');
        $correo2= $this->request->data('Correo2');
        $celular= $this->request->data('Telefono_celular');
        $telOf= $this->request->data('Telefono_oficina');
        $telRes= $this->request->data('Telefono_Residencia');
        $sede= $this->request->data('Sede');
        $descripcion= $this->request->data('descripcion');
        
        //Falta insertar cursos que esta impartiendo actualmente
        
        if($codigo!=''){
        
        $query1->insert(['codigo','nombre','apellidos','cedula'])
        ->values([
        'codigo' => $codigo,
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'cedula' => $cedula,
        
        ])
    ->execute();
    
        
        //Falta insertar especialidad
        $query2->insert(['codigo'])
        ->values([
        'codigo' => $codigo,
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
     * @param string|null $id Profesor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profesor = $this->Profesor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profesor = $this->Profesor->patchEntity($profesor, $this->request->data);
            if ($this->Profesor->save($profesor)) {
                $this->Flash->success(__('The profesor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The profesor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('profesor'));
        $this->set('_serialize', ['profesor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profesor = $this->Profesor->get($id);
        if ($this->Profesor->delete($profesor)) {
            $this->Flash->success(__('The profesor has been deleted.'));
        } else {
            $this->Flash->error(__('The profesor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

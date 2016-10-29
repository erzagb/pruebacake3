<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Cursos Controller
 *
 * @property \App\Model\Table\CursosTable $Cursos
 * @property FlashComponent $Flash
 */
 
class CursosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cursos = $this->paginate($this->Cursos);

        $this->set(compact('cursos'));
        $this->set('_serialize', ['cursos']);
    }
    
    public function agregar()
    {
        $user = $this->Cursos->newEntity();
       
       $this->set(compact('cursos'));
    }
    
      public function editar()
    {
        $user = $this->Cursos->newEntity();
       
       $this->set(compact('cursos'));
    }
    
      public function ver()
    {
        $user = $this->Cursos->newEntity();
       
       $this->set(compact('cursos'));
    }
    
    

    /**
     * View method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curso = $this->Cursos->get($id, [
            'contain' => []
        ]);

        $this->set('curso', $curso);
        $this->set('_serialize', ['curso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    
        $curso = TableRegistry::get('cursos');
        //Se hacen tantas querys como inserts se necesiten hacer,por ejemplo $query2 = $profesor->query3();  $query3 = $sedes->query3();
        $query = $curso->query();
        
        
        $codigocurso = $this->request->data('Cod_del_curso');
        $nombreCurso= $this->request->data('Nombre_del_curso');
        $horario= $this->request->data('Horario_del_curso');
        $cupo= $this->request->data('cupo');
        $costo= $this->request->data('costo');
        
          if ($codigocurso != ''){//Condicion que valida que llave primaria no sea null
        $query->insert(['codigo_curso','nombre_curso', 'horario','cupo','costo'])
        ->values([
        'codigo_curso'=>$codigocurso,
        'nombre_curso'=>$nombreCurso,
        'horario'=>$horario,
        'cupo'=>$cupo,
        'costo'=>$costo
        ])
    ->execute();
    
        if ($query) {
                $this->Flash->success(__('El curso ha sido agregado.'));

                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('TEl curso no se ha podido almacenar. Por favor,intente de nuevo.'));
            }
    }
        
    }
  
    	

    /**
     * Edit method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curso = $this->Cursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data);
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The curso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('curso'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Cursos->get($id);
        if ($this->Cursos->delete($curso)) {
            $this->Flash->success(__('The curso has been deleted.'));
        } else {
            $this->Flash->error(__('The curso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

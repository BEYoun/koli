<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Patients Controller
 *
 * @property \App\Model\Table\PatientsTable $Patients
 *
 * @method \App\Model\Entity\Patient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PatientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $patients = $this->paginate($this->Patients);

        $this->set(compact('patients'));
    }

    /**
     * View method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $patient = $this->Patients->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('patient', $patient);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $patient = $this->Patients->newEntity();
        $patient['nom']=$this->request->query['nom'];
        $patient['prenom']=$this->request->query['prenom'];
        $patient['users_id']=$this->request->query['id'];
        $patient['adresse']=$this->request->query['adresse'];
        $patient['tel']=$this->request->query['tel'];
        $patient = $this->Patients->patchEntity($patient, $this->request->getData());
            debug($patient);
            if ($this->Patients->save($patient)) {
                $this->Flash->success(__('The patient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patient could not be saved. Please, try again.'));

        /*if ($this->request->is('post')) {
            $patient = $this->Patients->patchEntity($patient, $this->request->getData());
            debug($patient);
            if ($this->Patients->save($patient)) {
                $this->Flash->success(__('The patient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patient could not be saved. Please, try again.'));
        }*/
        
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $patient = $this->Patients->get($this->request->data['id'], [
            'contain' => []
        ]);
        echo $this->request->data['id'];
        if ($this->request->is(['patch', 'post', 'put'])) {
            if($this->request->data['photo']['name']==''){
                $t=$this->Patients->find()->where(['id ='=>$this->request->data['id']])->first();
                $this->request->data['photo']=$t['photo'];
                $patients = $this->Patients->patchEntity($patient, $this->request->getData());
                if ($this->Patients->save($patient)) {
                    $this->Flash->success(__('The patient has been saved.'));

                    return $this->redirect($this->referer());
                }
                debug($patients);
            }else{
                $filename=$this->request->data['photo']['name'];
                $url = '/cabinet/img/'.$filename;
                $uploadpath='img/';
                $uploadfile=$uploadpath.$filename;
                if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadfile)){
                    $this->request->data['photo']=$url;
                    $patient = $this->Patients->patchEntity($patient, $this->request->getData());
                    if ($this->Patients->save($patient)) {
                        $this->Flash->success(__('The patient has been saved.'));

                        return $this->redirect($this->referer());
                    }
                }
                debug($patient);
                
            }
        }
        debug($this->request);
        die();
        /*if ($this->request->is(['patch', 'post', 'put'])) {
            $patient = $this->Patients->patchEntity($patient, $this->request->getData());
            if ($this->Patients->save($patient)) {
                $this->Flash->success(__('The patient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patient could not be saved. Please, try again.'));
        }
        $users = $this->Patients->Users->find('list', ['limit' => 200]);
        $this->set(compact('patient', 'users'));*/
    }

    /**
     * Delete method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $patient = $this->Patients->get($id);
        if ($this->Patients->delete($patient)) {
            $this->Flash->success(__('The patient has been deleted.'));
        } else {
            $this->Flash->error(__('The patient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function acceuil(){
           /* debug($this->request->session()->read('Auth.User.id'));
                die();*/
        $data=$this->Patients
            ->find('all')
            ->where(['users_id ='=>$this->request->params['?']['id']])->first();
        //$user=$this->Users->find('all')->where(['id ='=>$this->request->params['?']['id']]);
        $this->set(compact('data'/*,'user'*/));  
    }
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }
    
}

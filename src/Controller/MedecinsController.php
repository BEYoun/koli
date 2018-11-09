<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medecins Controller
 *
 * @property \App\Model\Table\MedecinsTable $Medecins
 *
 * @method \App\Model\Entity\Medecin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedecinsController extends AppController
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
        $medecins = $this->paginate($this->Medecins);

        $this->set(compact('medecins'));
    }

    /**
     * View method
     *
     * @param string|null $id Medecin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medecin = $this->Medecins->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('medecin', $medecin);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medecin = $this->Medecins->newEntity();
        if ($this->request->is('post')) {
            $medecin = $this->Medecins->patchEntity($medecin, $this->request->getData());
            if ($this->Medecins->save($medecin)) {
                $this->Flash->success(__('The medecin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medecin could not be saved. Please, try again.'));
        }
        $users = $this->Medecins->Users->find('list', ['limit' => 200]);
        $this->set(compact('medecin', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medecin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medecin = $this->Medecins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medecin = $this->Medecins->patchEntity($medecin, $this->request->getData());
            if ($this->Medecins->save($medecin)) {
                $this->Flash->success(__('The medecin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medecin could not be saved. Please, try again.'));
        }
        $users = $this->Medecins->Users->find('list', ['limit' => 200]);
        $this->set(compact('medecin', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medecin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medecin = $this->Medecins->get($id);
        if ($this->Medecins->delete($medecin)) {
            $this->Flash->success(__('The medecin has been deleted.'));
        } else {
            $this->Flash->error(__('The medecin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

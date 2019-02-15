<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Diseases Controller
 *
 * @property \App\Model\Table\DiseasesTable $Diseases
 *
 * @method \App\Model\Entity\Disease[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiseasesController extends AppController
{
     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('index');
        $this->Auth->allow('view');
    }
    
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
        $diseases = $this->paginate($this->Diseases);

        $this->set(compact('diseases'));
    }

    /**
     * View method
     *
     * @param string|null $id Disease id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disease = $this->Diseases->get($id, [
            'contain' => ['Users', 'Images']
        ]);

        $this->set('disease', $disease);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disease = $this->Diseases->newEntity();
        if ($this->request->is('post')) {
            $disease = $this->Diseases->patchEntity($disease, $this->request->getData());
            if ($this->Diseases->save($disease)) {
                $this->Flash->success(__('The disease has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease could not be saved. Please, try again.'));
        }
        $users = $this->Diseases->Users->find('list', ['limit' => 200]);
        $this->set(compact('disease', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disease id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disease = $this->Diseases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disease = $this->Diseases->patchEntity($disease, $this->request->getData());
            if ($this->Diseases->save($disease)) {
                $this->Flash->success(__('The disease has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease could not be saved. Please, try again.'));
        }
        $users = $this->Diseases->Users->find('list', ['limit' => 200]);
        $this->set(compact('disease', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disease id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disease = $this->Diseases->get($id);
        if ($this->Diseases->delete($disease)) {
            $this->Flash->success(__('The disease has been deleted.'));
        } else {
            $this->Flash->error(__('The disease could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

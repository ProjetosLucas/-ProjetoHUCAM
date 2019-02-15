<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Arrows Controller
 *
 * @property \App\Model\Table\ArrowsTable $Arrows
 *
 * @method \App\Model\Entity\Arrow[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArrowsController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Images']
        ];
        $arrows = $this->paginate($this->Arrows);

        $this->set(compact('arrows'));
    }

    /**
     * View method
     *
     * @param string|null $id Arrow id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arrow = $this->Arrows->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('arrow', $arrow);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arrow = $this->Arrows->newEntity();
        if ($this->request->is('post')) {
            $arrow = $this->Arrows->patchEntity($arrow, $this->request->getData());
            if ($this->Arrows->save($arrow)) {
                $this->Flash->success(__('The arrow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arrow could not be saved. Please, try again.'));
        }
        $images = $this->Arrows->Images->find('list', ['limit' => 200]);
        $this->set(compact('arrow', 'images'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Arrow id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arrow = $this->Arrows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arrow = $this->Arrows->patchEntity($arrow, $this->request->getData());
            if ($this->Arrows->save($arrow)) {
                $this->Flash->success(__('The arrow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arrow could not be saved. Please, try again.'));
        }
        $images = $this->Arrows->Images->find('list', ['limit' => 200]);
        $this->set(compact('arrow', 'images'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Arrow id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arrow = $this->Arrows->get($id);
        if ($this->Arrows->delete($arrow)) {
            $this->Flash->success(__('The arrow has been deleted.'));
        } else {
            $this->Flash->error(__('The arrow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

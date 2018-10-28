<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ellipses Controller
 *
 * @property \App\Model\Table\EllipsesTable $Ellipses
 *
 * @method \App\Model\Entity\Ellipse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EllipsesController extends AppController
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
        $ellipses = $this->paginate($this->Ellipses);

        $this->set(compact('ellipses'));
    }

    /**
     * View method
     *
     * @param string|null $id Ellipse id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ellipse = $this->Ellipses->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('ellipse', $ellipse);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ellipse = $this->Ellipses->newEntity();
        if ($this->request->is('post')) {
            $ellipse = $this->Ellipses->patchEntity($ellipse, $this->request->getData());
            if ($this->Ellipses->save($ellipse)) {
                $this->Flash->success(__('The ellipse has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ellipse could not be saved. Please, try again.'));
        }
        $images = $this->Ellipses->Images->find('list', ['limit' => 200]);
        $this->set(compact('ellipse', 'images'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ellipse id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ellipse = $this->Ellipses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ellipse = $this->Ellipses->patchEntity($ellipse, $this->request->getData());
            if ($this->Ellipses->save($ellipse)) {
                $this->Flash->success(__('The ellipse has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ellipse could not be saved. Please, try again.'));
        }
        $images = $this->Ellipses->Images->find('list', ['limit' => 200]);
        $this->set(compact('ellipse', 'images'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ellipse id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ellipse = $this->Ellipses->get($id);
        if ($this->Ellipses->delete($ellipse)) {
            $this->Flash->success(__('The ellipse has been deleted.'));
        } else {
            $this->Flash->error(__('The ellipse could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Textboxes Controller
 *
 * @property \App\Model\Table\TextboxesTable $Textboxes
 *
 * @method \App\Model\Entity\Textbox[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TextboxesController extends AppController
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
        $textboxes = $this->paginate($this->Textboxes);

        $this->set(compact('textboxes'));
    }

    /**
     * View method
     *
     * @param string|null $id Textbox id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $textbox = $this->Textboxes->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('textbox', $textbox);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $textbox = $this->Textboxes->newEntity();
        if ($this->request->is('post')) {
            $textbox = $this->Textboxes->patchEntity($textbox, $this->request->getData());
            if ($this->Textboxes->save($textbox)) {
                $this->Flash->success(__('The textbox has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The textbox could not be saved. Please, try again.'));
        }
        $images = $this->Textboxes->Images->find('list', ['limit' => 200]);
        $this->set(compact('textbox', 'images'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Textbox id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $textbox = $this->Textboxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $textbox = $this->Textboxes->patchEntity($textbox, $this->request->getData());
            if ($this->Textboxes->save($textbox)) {
                $this->Flash->success(__('The textbox has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The textbox could not be saved. Please, try again.'));
        }
        $images = $this->Textboxes->Images->find('list', ['limit' => 200]);
        $this->set(compact('textbox', 'images'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Textbox id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $textbox = $this->Textboxes->get($id);
        if ($this->Textboxes->delete($textbox)) {
            $this->Flash->success(__('The textbox has been deleted.'));
        } else {
            $this->Flash->error(__('The textbox could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

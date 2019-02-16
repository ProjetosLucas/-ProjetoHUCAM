<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 *
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagesController extends AppController
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
            'contain' => ['ImageTypes', 'Diseases', 'Patients']
        ];
        $images = $this->paginate($this->Images);

        $this->set(compact('images'));
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['ImageTypes', 'Diseases', 'Patients', 'Arrows', 'Ellipses', 'Textboxes']
        ]);

        $this->set('image', $image);
    }

    public function draw($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['ImageTypes', 'Diseases', 'Patients', 'Arrows', 'Ellipses', 'Textboxes']
        ]);

        $this->set('image', $image);
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $image = $this->Images->newEntity();
        if ($this->request->is('post')) {
            /*O código novo adicionado foi daqui*/
            if (!empty($this->request->data['file_name']['name'])) {
                    $filename = $this->request->data['file_name']['name'];/*Aqui que vai sair o nome*/
                    $uploadpath ='exames/';/*Foi Criado Uma Pasta no webroot-> Eu Criei*/
                    $uploadfile =$uploadpath.$filename;
                    if(move_uploaded_file($this->request->data['file_name']['tmp_name'], $uploadfile)){
                            $this->request->data['file_name']=$filename;
                        }
            }
             /*Até aqui foi modificado*/
            $image = $this->Images->patchEntity($image, $this->request->getData());
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $imageTypes = $this->Images->ImageTypes->find('list', ['limit' => 200]);
        $diseases = $this->Images->Diseases->find('list', ['limit' => 200]);
        $patients = $this->Images->Patients->find('list', ['limit' => 200]);
        $this->set(compact('image', 'imageTypes', 'diseases', 'patients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            /*O código novo adicionado foi daqui*/
            if (!empty($this->request->data['file_name']['name'])) {
                    $filename = $this->request->data['file_name']['name'];/*Aqui que vai sair o nome*/
                    $uploadpath ='exames/';/*Foi Criado Uma Pasta no webroot-> Eu Criei*/
                    $uploadfile =$uploadpath.$filename;
                    if(move_uploaded_file($this->request->data['file_name']['tmp_name'], $uploadfile)){
                            $this->request->data['file_name']=$filename;
                        }
            }
             /*Até aqui foi modificado*/
            $image = $this->Images->patchEntity($image, $this->request->getData());
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $imageTypes = $this->Images->ImageTypes->find('list', ['limit' => 200]);
        $diseases = $this->Images->Diseases->find('list', ['limit' => 200]);
        $patients = $this->Images->Patients->find('list', ['limit' => 200]);
        $this->set(compact('image', 'imageTypes', 'diseases', 'patients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Images->get($id);
        if ($this->Images->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Controller\Controller;


class ClientsController extends Controller
{
    public function index(){}
    public function edit($id){

        $clientsRaw = $this->fetchTable('Clients');
        $client = $clientsRaw->findById($id)->firstOrFail();
        
        if($this->request->is(['post', 'put'])){
            $clientsRaw->patchEntity($client, $this->request->getData());
            if ($clientsRaw->save($client)) {
                $this->Flash->success(__('Client has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update client.'));
        }
        $this->set('client', $client);
    }
    public function delete($id){

        $clientsRaw = $this->fetchTable('Clients');
        $client = $clientsRaw->findById($id)->firstOrFail();
        
        if($this->request->is(['post', 'put'])){
            $clientsRaw->patchEntity($client, $this->request->getData());
            if ($clientsRaw->delete($client)) {
                $this->Flash->success(__('The {0} client has been deleted.'));
        
                return $this->redirect(['action' => 'index']);
            }
        }
    }
}

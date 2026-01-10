<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;


class OrdersController extends Controller
{
    public function index(){}
    public function edit($id){

        $ordersRaw = $this->fetchTable('Orders');
        $order = $ordersRaw->findById($id)->firstOrFail();
        
        if($this->request->is(['post', 'put'])){
            $ordersRaw->patchEntity($order, $this->request->getData());
            if ($ordersRaw->save($order)) {
                $this->Flash->success(__('Order has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update order.'));
        }
        $this->set('order', $order);
    }
    public function delete($id){

        $ordersRaw = $this->fetchTable('Orders');
        $order = $ordersRaw->findById($id)->firstOrFail();
        
        if($this->request->is(['post', 'put'])){
            if ($ordersRaw->delete($order)) {
                $this->Flash->success(__('The {0} order has been deleted.'));
        
                return $this->redirect(['action' => 'index']);
            }
        }
    }
}

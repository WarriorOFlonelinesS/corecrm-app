<?php
declare(strict_types=1);

namespace App\View\Cell;

use Cake\ORM\TableRegistry;
use Cake\View\Cell;

/**
 * Orders cell
 */
class OrdersCell extends Cell
{
    public function display()
    {
        $OrdersTable = TableRegistry::getTableLocator()->get('Orders');
        $orders = $OrdersTable->find()
            ->contain('Clients')
            ->toArray();
        $this->set('orders', $orders);
    }
}

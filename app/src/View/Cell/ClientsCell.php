<?php
declare(strict_types=1);

namespace App\View\Cell;

use Cake\ORM\TableRegistry;
use Cake\View\Cell;

/**
 * Clients cell
 */
class ClientsCell extends Cell
{
    public function display()
    {
        $ClientsTable = TableRegistry::getTableLocator()->get('Clients');
        $clients = $ClientsTable->find();
        $this->set('clients', $clients);
    }
}

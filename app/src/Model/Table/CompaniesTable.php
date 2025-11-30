<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class OrdersTable extends Table {
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('orders');
        $this->setPrimaryKey('id');
        $this->hasMany('Clients');
        $this->addBehavior('Timestamp');
    }
}

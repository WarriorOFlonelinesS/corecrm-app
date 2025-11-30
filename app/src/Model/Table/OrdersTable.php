<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class OrdersTable extends Table {
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('orders');
        $this->setPrimaryKey('id');
        $this->belongsTo('Clients')
            ->setForeignKey('client_id');
        $this->belongsTo('Companies')
            ->setForeignKey('client_id');
        $this->addBehavior('Timestamp');
    }
}

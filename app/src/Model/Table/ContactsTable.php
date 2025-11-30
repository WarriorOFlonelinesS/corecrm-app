<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class OrdersTable extends Table {
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('contacts');
        $this->setPrimaryKey('id');
        $this->belongsTo('Clients')
            ->setForeignKey('client_id');
        $this->belongsTo('Companies')
            ->setForeignKey('company_id');
        $this->addBehavior('Timestamp');
    }
}

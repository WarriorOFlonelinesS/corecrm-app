<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ClientsTable extends Table {
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('clients');
        $this->setPrimaryKey('id');
        $this->hasMany('Orders');
        $this->hasOne('Contacts');
        $this->addBehavior('Timestamp');
    }
}

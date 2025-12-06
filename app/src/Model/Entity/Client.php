<?php 
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Client extends Entity {
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'phone' => true,
        'email' => true,
        'address' => true,
        'created_at' => true,
        'updated_at' => true,
    ];
}
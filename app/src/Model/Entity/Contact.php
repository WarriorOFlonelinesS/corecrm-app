<?php 
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Contact extends Entity {
    protected array $_accessible = [
        'phone' => true,
        'email' => true,
    ];
}
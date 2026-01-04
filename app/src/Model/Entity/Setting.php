<?php 
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Setting extends Entity {
    protected array $_accessible = [
        'key' => true,
        'value' => true,
    ];
}
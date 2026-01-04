<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;


class AppController extends Controller
{
    
    public function beforeRender(\Cake\Event\EventInterface $event)
    {
        
        parent::beforeRender($event);
        // Make sure charset is always set and never null
        $encoding = \Cake\Core\Configure::read('App.encoding', 'UTF-8');
        $this->response = $this->response->withCharset($encoding ?: 'UTF-8');
    }
}

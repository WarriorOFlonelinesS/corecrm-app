<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;


class SettingsController extends Controller
{
   
    public function index(){
        $settingsRaw = $this->fetchTable('Settings');
        $data = $settingsRaw->find()->all();
        $settings = [];

        foreach($data as $s){
            $settings[$s->key] = $s->value;
        }

        $this->set('settings', $settings);
    }

    public function saveAll() {
        if($this->request->is(['post', 'put'])){
            $data = $this->request->getData('App');
            foreach($data as $key => $value){
                
                $setting = $this->Settings->find()
                    ->where(['key'=> $key])
                    ->first();
                
                if(!$setting){
                    $setting = $this->Settings->newEmptyEntity();
                    $setting->key = 'App' . $key;
                }
                $setting->value = (string)$value;
                $this->Settings->save($setting);
            }
            $this->Flash->success('CORE_SYSTEM_UPDATED');
        }
        return $this->redirect(['action' => 'index']);
    }
}

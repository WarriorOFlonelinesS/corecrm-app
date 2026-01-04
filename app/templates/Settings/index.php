<?php

use Cake\Core\Configure;

$adminEmail = Configure::read('admin_email');
$companyName = Configure::read('company_name');
?>
<h1 class="cyber-header">Settings</h1>
<?= $this->element('forms/settings', 
    ['settings' => $settings]
) ?>

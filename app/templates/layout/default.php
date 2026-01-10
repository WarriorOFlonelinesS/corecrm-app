<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$cakeDescription = 'CRM of the future';
$siteName = Configure::read('site_title')
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&display=swap" 
rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Michroma&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $cakeDescription ?>: <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css('main') ?>
    <?= $this->fetch('script') ?>
    <style>
        body { min-height: 100vh; }
        .sidebar { min-height: 100vh; }
        .sidebar .nav-link.active {
          color: #fff;
          background-color: #0d6efd;
        }
    </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <nav class="cyber-side col-md-2 d-none d-md-block sidebar p-0">
      <div class="position-sticky px-30 pt-3">
        <ul class="nav flex-column">
          <li class="flex">
             <div class="cyber-logo mb-30">
                <?php  echo $this->Html->image('logo.png', array('alt' => 'CakePHP')); ?>
             </div>
          </li>
          <li class="nav-item">
          <?php echo $this->Html->link(
                  'Home',
                  '/',
                  ['class' => 'cyber-link my-2']
              );
              ?>
          </li>
          <li class="nav-item">
              <?php echo $this->Html->link(
                  'Clients',
                  '/clients',
                  ['class' => 'cyber-link my-2']
              );
              ?>
          </li>
          <li class="nav-item">
            <?php echo $this->Html->link(
                'Orders',
                '/orders',
                ['class' => 'cyber-link my-2']
            );
            ?>
          </li>
          <li class="nav-item">
          <?php echo $this->Html->link(
                'Settings',
                '/settings',
                ['class' => 'cyber-link my-2']
            );
            ?>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Main content -->
    <main class="col-md-9 ms-sm-2 px-md-4 py-3">
      <?= $this->fetch('content') ?>
    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

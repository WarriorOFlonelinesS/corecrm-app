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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <nav class="col-md-2 d-none d-md-block bg-light sidebar p-0">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?= $this->Url->build('/') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
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

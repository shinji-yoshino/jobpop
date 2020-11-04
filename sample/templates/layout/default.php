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
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="wrapper">
        <nav class="top-nav">
          <a href="index.php"><img src="/sample/webroot/img/logo.png" alt="jobpop"></a>
          <ul>
            <li><a href="/jobpop/php/index.php">Home</a></li>
            <li><a href="/jobpop/php/whats.php">What's</a></li>
            <li><a href="/jobpop/php/company.php">Company</a></li>
            <li><a href="/jobpop/php/recruit.php">Recruit</a></li>
            <li><a href="/jobpop/php/qa/index.php">Q&A</a></li>
            <li><a href="/jobpop/php/access.php">Access</a></li>
            <li><a href="/jobpop/php/blog.php">Blog</a></li>
            <li><a href="/jobpop/php/contact/index.php/">Contact</a></li>
          </ul>
        </nav>
        <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
        <footer>
            <a href="#">
              <p>Powerd by SIGNAL Co.Ltd</p>
            </a>
        </footer>
    </div>
</body>
</html>

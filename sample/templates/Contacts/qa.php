<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $contacts
 */
?>
<head>

  <?= $this->Html->css(['qa']) ?>
  <?= $this->Html->script('jquery', array( 'inline' => false )) ?>

</head>

<section>
  <h1>Q&A</h1>
  <div class="qa">
    <a href="registrant.php">
      <img src="/sample/webroot/img/registrant.png" alt="registrant">
    </a>
  </div>
  <div class="qa">
    <a href="company.php">
      <img src="/sample/webroot/img/company_qa.png" alt="company_qa">
    </a>
  </div>
  <div class="qa" id="blank">
    <img src="/sample/webroot/img/unknown.png" alt="unknown">
  </div>
</section>

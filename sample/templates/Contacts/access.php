<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $contacts
 */
?>
<head>

  <?= $this->Html->css(['access']) ?>
  <?= $this->Html->script('jquery', array( 'inline' => false )) ?>

</head>

<section>
  <h1>Access</h1>
  <div id="map">
    <h2>ジョブポップ</h2>
    <p>〒170-0013 東京都豊島区東池袋1-31-2ルピナス池袋202</p>
    <p>TEL 03-5955-0777 FAX 03-6914-0557</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.774994756231!2d139.7141407143076!3d35.731751834808854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d6671461cbd%3A0xbdc399e37f70734f!2z44CSMTcwLTAwMTMg5p2x5Lqs6YO96LGK5bO25Yy65p2x5rGg6KKL77yR5LiB55uu77yT77yR4oiS77ySIOODq-ODlOODiuOCueaxoOiiiw!5e0!3m2!1sja!2sjp!4v1590912521935!5m2!1sja!2sjp" width="940" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</section>

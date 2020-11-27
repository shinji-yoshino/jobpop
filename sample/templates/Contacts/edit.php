<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $contact
 */
?>
<header>
  <?= $this->Html->css(['edit']) ?>
  <?= $this->Html->script('jquery', array( 'inline' => false )) ?>
</header>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $contact->id],
                ['confirm' => __('本当に{0}を削除しますか?', $contact->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('一覧に戻る'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contacts form content">
            <?= $this->Form->create($contact) ?>
            <fieldset>
                <legend><?= __('編集してください') ?></legend>
                <p>氏名<span style="color: red">*</span></p>
                <?= $this->Form->control('name'); ?>
                <p>フリガナ<span style="color: red">*</span></p>
                <?= $this->Form->control('kana'); ?>
                <p>電話番号</p>
                <?= $this->Form->control('tel'); ?>
                <p>メールアドレス<span style="color: red">*</span></p>
                <?= $this->Form->control('address'); ?>
                <p>お問い合わせ内容<span style="color: red">*</span></p>
                <?= $this->Form->control('content'); ?>
            </fieldset>
            <?= $this->Form->button(__('更新する')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $contacts
 */
?>

<head>
    <?= $this->Html->css(['index']) ?>
    <?= $this->Html->script('jquery', array( 'inline' => false )) ?>
    <script>
      function check(){
        if (document.form.name.value == "") {
          alert("必須項目を入力してください")
          return false
        }
        if (document.form.kana.value == "") {
          alert("必須項目を入力してください")
          return false
        }
        if (document.form.address.value == "") {
          alert("必須項目を入力してください")
          return false
        }
        if (document.form.content.value == "") {
          alert("必須項目を入力してください")
          return false
        }

        if (window.confirm("送信してよろしいですか?")) {
          return true
        }else{
          return false
        }
      }
    </script>
</head>

<div class="contacts index content">
    <section>
      <h1>contact</h1>
      <div id="contact">
        <h2 class="title">下記の項目をご記入の上送信ボタンを押してください</h2>
        <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
        <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
        <p><span style="color: red">*</span>は必須項目となります。</p>
        <?= $this->Form->create($contact) ?>
        <dl class="clearfix">
          <dt>氏名<span style="color: red">*</span></dt>
          <dd>
            <?= $this->Form->control('name'); ?>
          </dd>
          <dt>フリガナ<span style="color: red">*</span></dt>
          <dd>
            <?= $this->Form->control('kana'); ?>
          </dd>
          <dt>電話番号</dt>
          <dd>
            <?= $this->Form->control('tel'); ?>
          </dd>
          <dt>メールアドレス<span style="color: red">*</span></dt>
          <dd>
            <?= $this->Form->control('address'); ?>
          </dd>
        </dl>
        <h2 class="title">1.お問い合わせ内容をご記入ください<span style="color: red">*</span></h2>
        <dl class="clearfix">
          <dd>
            <?= $this->Form->control('content'); ?>
          </dd>
          <?= $this->Form->button(__('送　信')) ?>
        </dl>
        <?= $this->Form->end() ?>
      </div>
    </section>

    <div id="deta">
      <h2>送信データ一覧</h2>
      <table>
        <tr id="border1">
          <th><?= $this->Paginator->sort('id') ?></th>
          <th><?= $this->Paginator->sort('name') ?></th>
          <th><?= $this->Paginator->sort('kana') ?></th>
          <th><?= $this->Paginator->sort('tel') ?></th>
          <th><?= $this->Paginator->sort('address') ?></th>
          <th><?= $this->Paginator->sort('created') ?></th>
          <th><?= $this->Paginator->sort('modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
        <tr class="border2">
          <td><?= $this->Number->format($contact->id) ?></td>
          <td><?= h($contact->name) ?></td>
          <td><?= h($contact->kana) ?></td>
          <td><?= h($contact->tel) ?></td>
          <td><?= h($contact->address) ?></td>
          <td><?= h($contact->created) ?></td>
          <td><?= h($contact->modified) ?></td>
          <td>
            <div class="update float">
              <?= $this->Html->link(__('更 新'), ['action' => 'edit', $contact->id]) ?>
            </div>
            <div class="delete float">
              <?= $this->Form->postLink(__('削 除'), ['action' => 'delete', $contact->id], ['confirm' => __('{0}を本当に削除してよろしいですか?', $contact->id)]) ?>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
      </table>
    </div>
</div>

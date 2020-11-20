<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $contacts
 */
?>
<head>

    <?= $this->Html->css(['top']) ?>
    <?= $this->Html->script('jquery', array( 'inline' => false )) ?>

</head>

<div id="top">
  <img src="/sample/webroot/img/main_img.jpg" alt="main">
  <img id="copy1" src="/sample/webroot/img/catchcopy.png" alt="copy1">
  <img id="copy2" src="/sample/webroot/img/catchcopy2.png" alt="copy2">
</div>

<div id="home">
  <img src="/sample/webroot/img/title.png" alt="title">
  <nav>
    <div class="block">
      <div class="button"></div>
      <p class="text">ジョブポップとはこういう会社です。</p>
      <p class="more">more</p>
    </div>
    <div class="block">
      <div class="button"></div>
      <p class="text">会社概要</p>
      <p class="more">more</p>
    </div>
    <div class="block">
      <div class="button"></div>
      <p class="text">随時スタッフ募集しています。</p>
      <p class="more">more</p>
    </div>
    <div class="block">
      <div class="button"></div>
      <p class="text">よくある質問Q&A</p>
      <p class="more">more</p>
    </div>
    <div class="block">
      <div class="button"></div>
      <p class="text">ジョブポップへのお問い合せ</p>
      <p class="more">more</p>
    </div>
  </nav>
</div>

<script>
setTimeout(function(){
  fade()
  setInterval("fade()", 10000)
}, 2000)

var copyNum = 2
function fade(){
  if(copyNum == 1){
    $("#copy1").fadeOut(1000,function(){
      $("#copy2").fadeIn(1000)
    })
    copyNum = 2
  }else {
    $("#copy2").fadeOut(1000,function(){
      $("#copy1").fadeIn(1000)
    })
    copyNum = 1
  }
}

for (var i = 0; i < 5; i++) {
    $(".block").eq(i).find(".button").css("background-image", "url(/sample/webroot/img/btn0" + (i+1) + ".png)")
}
$(".button").on("click", function(){
  var num = $(this).parent().index()
  switch (num) {
    case 0:
      location.href = "/sample/contacts/whats"
      break;

    case 1:
      window.location.href = "/sample/contacts/company"
      break;

    case 2:
      window.location.href = "/sample/contacts/recruit"
      break;

    case 3:
      window.location.href = "/sample/contacts/qa/index.php"
      break;

    case 4:
      window.location.href = "/sample/contacts/contact"
      break;
  }
})
</script>

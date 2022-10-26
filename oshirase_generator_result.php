<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
if ($_GET['title'] == '') {
    $_GET['title'] = 'Fantasy Warter Margin';
}
if ($_GET['company'] == '') {
    $_GET['company'] = 'as elementary schoolchild';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="oshirase_generator.css" media="screen, print">
  <link rel="shortcut icon" href="./favicon.ico">
  <title>『<?php print h($_GET['title'])?>』シリーズに関するお知らせ by 「お知らせ」ジェネレータ</title>
</head>
<body>
<div id="wrapper">
  <div id="headerArea" class="clearfix">
      <div class="fl ml5"></div>
      <div class="fr"></div>
      <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-size="large" data-count="none">ツイート</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
  <hr>
  <div class="pankuzuup"><a href="./">トップ</a> > 『<?php print h($_GET['title'])?>』シリーズに関するお知らせ</div>
  <div id="contents">
    <div class="infoheader1">お客様各位</div>
    <div class="infodate"><?php print date('Y年n月j日', strtotime(today)); ?></div>
    <div class="infocorp">株式会社<?php print h($_GET['company'])?></div>
    <div class="infotitle">『<?php print h($_GET['title'])?>』シリーズに関するお知らせ</div>
    <div class="infotext">
      <p class="int">平素は弊社製品をご愛顧いただきまして誠にありがとうございます。『<?php print h($_GET['title'])?>』シリーズの制作について、お客さまにご心配をおかけしております。</p>
      <p class="int"><?php print h($_GET['company'])?>の『<?php print h($_GET['title'])?>』シリーズは、お客さまから長年愛され続けている大切なコンテンツであり、弊社も長年かけて育ててきた大切なタイトルですので、今後も続けて参りたいと思っております。</p>
      <p class="int">次回作をどのような形で提供できるかについては話し合いを続けておりますが、残念ながらまだ結論が出ておりません。今後も制作・提供を続けてまいりたいと思っておりますので、ご期待ください。</p>
      <p class="int">尚、<?php print h($_GET['company'])?>は新たな『<?php print h($_GET['title'])?>』シリーズの制作に着手するために主要スタッフのオーディションを開始いたします。応募はホームページの採用サイトをご参照ください。</p>
      <p class="int"><a href="https://www.kickstarter.com/projects/iga/bloodstained-ritual-of-the-night" target="_blank"><span style="color: blue;">■ 新「<?php print h($_GET['title'])?>」制作メンバー募集</span></a></p>
      <p class="int">一日も早く、ファンの皆様に喜んでいただける作品をお出ししたいと思っておりますので、引き続き同シリーズをご愛顧賜りますようお願い申し上げます。ご不明な点がありましたら<?php print h($_GET['company'])?>お客様相談室までご相談ください。</p>
      <br>
      <div id="navibox">
      <h3><?php print h($_GET['company'])?>お客様相談室</h3><br>
      お電話によるお問い合わせ<br>
      ナビダイヤル0573-CAS-INO<br>
      （ナビダイヤルを利用できない方: 03-573M-ONEY）<br>
      平日：10:00～18:00（休み：土日祝日）<br>
      <br>
      電子メールによるお問い合わせ<br>
      bocchan.souleater@gmail.com<br>
      </div>
    </div>
    <div class="infofoot">以上</div>
  </div>
</div>
</body>
</html>

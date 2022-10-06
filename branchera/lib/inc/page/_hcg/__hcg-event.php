<?php

$event_1 = array(
  'ttl' => '「HASEKO 未来の住まいアイデア こども絵画コンテスト」結果発表！',
  'url' => 'https://www.haseko.co.jp/kodomo_contest/award/',
  'img' => '/hcg/hc-children-award@2x.jpg',
  'onsite' => false
);
$event_2 = array(
  'ttl' => '長谷工のマンション再生セミナー',
  'url' => 'https://www.haseko.co.jp/saisei/seminar/index.php#seminar_report',
  'img' => '/hcg/event-img__saisei@2x.png',
  'onsite' => false
);
$event_3 = array(
  'ttl' => '長谷工シニアグループのイベント＆見学情報',
  'url' => 'http://www.haseko-senior.co.jp/',
  'img' => '/hcg/event-img__sinir@2x.png',
  'onsite' => false
);
$event_4 = array(
  'ttl' => 'BISTATION新橋で開催中のセミナー',
  'url' => 'https://bistation-members.jp/seminar',
  'img' => '/hcg/event-img__bistation@2x.png',
  'onsite' => false
);

$event_num = rand(1, 4);
if ($event_num == 1) {
  $event_info = $event_1;
} elseif ($event_num == 2) {
  $event_info = $event_2;
} elseif ($event_num == 3) {
  $event_info = $event_3;
} elseif ($event_num == 4) {
  $event_info = $event_4;
}

?>
<?php if($event_info['onsite']) {?>
<a href="<?php echo($base_url);?><?php echo($event_info['url']);?>" class="service-inner">
  <?php } else {?>
  <a href="<?php echo($event_info['url']);?>" class="service-inner" target="_blank">
    <?php }?>
    <div class="service-inner__header">
      <div class="service-inner__img">
        <img alt="<?php echo($event_info['ttl'])?>" class="u-img__max" src="<?php echo($img_url);?><?php echo($event_info['img'])?>"></div>
      <h3 class="service-inner__ttl u-icon">
        <?php echo($event_info['ttl'])?>
      </h3>
    </div>
  </a>

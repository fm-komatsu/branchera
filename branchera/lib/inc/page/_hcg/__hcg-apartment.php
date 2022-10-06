<?php

$event_1 = array(
  'ttl' => '長谷工グループのマンションブランド「ブランシエラ」',
  'url' => 'https://www.branchera.com/',
  'img' => '/hcg/img-branchera@2x.png',
  'onsite' => false
);
$event_2 = array(
  'ttl' => '総合地所のマンションブランド「ルネ」',
  'url' => 'https://www.sgr-sumai.jp/',
  'img' => '/hcg/img-renai@2x.png',
  'onsite' => false
);
$event_3 = array(
  'ttl' => '長谷工コーポレーションの賃貸マンションブランド「ブランシエスタ」',
  'url' => 'https://www.haseko.co.jp/bransiesta/',
  'img' => '/hcg/img-bransiesta@2x.png',
  'onsite' => false
);
$event_4 = array(
  'ttl' => '長谷工コーポレーションのサービスアパートメント「THE AUTHENTIC」',
  'url' => 'https://www.haseko.co.jp/vietnam/authentic/',
  'img' => '/hcg/img-authentic@2x.png',
  'onsite' => false
);

$event_num = rand(1, 4);
$event_info = ${"event_".$event_num };
?>
<?php if($event_info['onsite']) {?>
  <a href="<?php echo($base_url);?><?php echo($event_info['url']);?>" class="service-inner">
<?php } else {?>
  <a href="<?php echo($event_info['url']);?>" class="service-inner" target="_blank">
<?php }?>
  <div class="service-inner__header">
      <div class="service-inner__img">
        <img
        alt="<?php echo($event_info['ttl'])?>"
        class="u-img__max"
        src="<?php echo($img_url);?><?php echo($event_info['img'])?>"></div>
      <h3 class="service-inner__ttl u-icon"><?php echo($event_info['ttl'])?></h3>
  </div>
</a>

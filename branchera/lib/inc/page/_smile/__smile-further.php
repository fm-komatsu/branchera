<h3 class="u-terms-point__ttl">さらに、<?php echo $smileName ?>の<?php echo $smileRatio ?>％分のスマイルをプレゼント！</h3>
<div class="u-terms-point__inner">
  <p><?php echo $smileEx ?><span class="u-small">※1</span>の<strong><?php echo $smileRatio ?>%</strong>をスマイルとして付与いたします。</p><small class="u-small">※付与されるスマイルの計算元となる代金につきましては、割引額や優待分などを差し引いた、実際にお支払いいただいた金額となります。<br>※<?php echo $smileConditions?>、<?php echo $smileWhen?>までにスマイルは付与されます。<br>
    <?php if ($smileInqflg === 1) {?>
      ※詳しくは<?php echo $smileInq ?>にお問い合わせください。
    <?php } else { }?>
  </small>
  <?php if (!empty($smileTel01)) { ?>
  <ul class="u-list__ul_nest u-small">
    <li><?php echo $smileInq ?></li>
    <li>
      <ul>
        <?php if (!empty($smileTel01)) { ?>
          <li><?php echo $smileTel01 ?></li>
        <?php  } else { }?>
        <?php if (!empty($smileTel02)) { ?>
          <li><?php echo $smileTel02 ?></li>
        <?php  } else { }?>
      </ul>
    </li>
  </ul>
  <?php  } else { }?>
</div>

<transition name="fade">

<div  class="lucky-room" v-if="luckyRoomBanner.isDisplay" :class="{'is-active': luckyRoomBanner.isActive}">
  <div class="lucky-room__row">
    <div class="lucky-room__item">
      <div @click="luckyRoomBannerClose" class="lucky-room__close u-font__bold"><span>×</span></div>
      <a href="<?php echo $mylucky_url; ?>" class="lucky-room__link">
        <img src="<?php echo $img_url ?>/common/lucky/luckyroom_bnr.jpg" alt="ラッキールーム「1日1回の運試し！」" class="u-img__max u-only__pc" style="max-width:200px" >
        <img src="<?php echo $img_url ?>/common/lucky/luckyroom_bnr_sp.jpg" alt="ラッキールーム「1日1回の運試し！」" class="u-img__max u-only__sp" >
      </a>
    </div>
  </div>
</div>

<div v-else>
  <div>
    <?php include ($inc_path."/lib/inc/pagetop.php"); ?>
  </div>
</div>

</transition>

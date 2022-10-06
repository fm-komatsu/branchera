<script>
  if (!window.opener || !Object.keys(window.opener).length) {
    // 親画面が存在しない
  } else {
    // 親画面が存在する
    var reloadJS = window.opener.location.reload();
  }
</script>

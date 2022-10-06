<script>
$(document).ready(function() {

    //input type=hidden のバリデーション
    $("input:hidden").each(function(i, e) {
        validate(e);
    });

    $("input,textarea").change(function() {
        validate(this);
    });

    $("input,textarea").focus(function() {
        var me = this;
        var flag = true;
        $("input,textarea").each(function(i, e) {
            //focusした自分のところに来たら、その位置をcounterに格納
            if (me == e) {
                flag = false;
            }
            validate(e, flag);
        });
    });

    //enterキー殺す
    $("input").keydown(function(e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            return false;
        } else {
            return true;
        }
    });

    $(".formBtn-submit").removeClass("ok").prop("disabled", true);
    $(".submitbutton").addClass("error");
});

function validate(e, flag) {
  if(flag === undefined){
    flag =true;
  }
    if (e.type == "text" || e.tagName == "TEXTAREA" || e.type == "hidden") {
        $(e).parent().children("p.warning").each(function(i, item) {
            if ($(item).hasClass("required")) {
                if (e.value == "") {
                    if(flag){
                      $(item).addClass("error");
                    }
                    $(item).addClass("error_count");
                    return false; //eachを抜ける
                } else {
                    $(item).removeClass("error");
                    $(item).removeClass("error_count");
                }
            } else if ($(item).hasClass("postal")) {
                if (e.value != "" && !e.value.match(/^[0-9]{3}-*[0-9]{4}$/)) {
                  if(flag){
                    $(item).addClass("error");
                  }
                  $(item).addClass("error_count");
                } else {
                    $(item).removeClass("error");
                    $(item).removeClass("error_count");
                }
              } else if ($(item).hasClass("number")) {
                  if (e.value != "" && !e.value.match(/^[0-9]+$/)) {
                    if(flag){
                      $(item).addClass("error");
                    }
                    $(item).addClass("error_count");
                  } else {
                      $(item).removeClass("error");
                      $(item).removeClass("error_count");
                  }
            } else if ($(item).hasClass("tel")) {
              if (e.value != "" && !e.value.match(/^[0-9\-+]+$/)) {
                if(flag){
                  $(item).addClass("error");
                }
                $(item).addClass("error_count");
              } else {
                  $(item).removeClass("error");
                  $(item).removeClass("error_count");
              }
            } else if ($(item).hasClass("email")) {
                if (e.value != "" && !e.value.match(/^[A-Za-z0-9]+[\w-]+@[\w\.-]+\.\w{2,}$/)) {
                  if(flag){
                    $(item).addClass("error");
                  }
                  $(item).addClass("error_count");
                } else {
                    $(item).removeClass("error");
                    $(item).removeClass("error_count");
                }
            } else if ($(item).hasClass("katakana")) {
                if (e.value != "" && !e.value.match(/^[\u30A0-\u30FF　 ]+$/)) {
                  if(flag){
                    $(item).addClass("error");
                  }
                  $(item).addClass("error_count");
                } else {
                    $(item).removeClass("error");
                    $(item).removeClass("error_count");
                }
            } else if ($(item).hasClass("email-equal")) {
              if($("input[name=email]").val()!=$("input[name=email2]").val()){
                if(flag){
                  $(item).addClass("error");
                }
                $(item).addClass("error_count");
              }else{
                $(item).removeClass("error");
                $(item).removeClass("error_count");
              }
            }
        });
    } else if (e.type == "radio") {
        $(e).parent().parent().children("p.warning").each(function(i, item) {
            if ($(item).hasClass("required")) {
                if ($(e).parent().parent().children().children("input:radio:checked").length == 0) {
                  if(flag){
                    $(item).addClass("error");
                  }
                  $(item).addClass("error_count");
                } else {
                    $(item).removeClass("error");
                    $(item).removeClass("error_count");
                }
            }else if (custom = item.className.match(/custom-(\w+)-(\w+)-(\w+)/)) {
                if($("input["+custom[1]+"="+custom[2]+"]").val()=="" && $("#"+custom[3]+":checked").val()){
                  if(flag){
                    $(item).addClass("error");
                  }
                  $(item).addClass("error_count");
                } else {
                    $(item).removeClass("error");
                    $(item).removeClass("error_count");
                }
            }
        });

    } else if (e.type == "checkbox") {
        $(e).parent().parent().children("p.warning").each(function(i, item) {
            if ($(item).hasClass("required")) {
              if ($(e).parent().parent().children().children("input:checkbox:checked").length == 0) {
                if(flag){
                  $(item).addClass("error");
                }
                $(item).addClass("error_count");
              } else {
                  $(item).removeClass("error");
                  $(item).removeClass("error_count");
              }
            }else if ($(item).hasClass("nomorethan-3")) {
              if ($(e).parent().parent().children().children("input:checkbox:checked").length > 3) {
                if(flag){
                  $(item).addClass("error");
                }
                $(item).addClass("error_count");
              } else {
                  $(item).removeClass("error");
                  $(item).removeClass("error_count");
              }
            }
        });
    }

    if ($(".warning.error_count").length > 0) {
        $(".formBtn-submit").removeClass("ok").prop("disabled", true);
        $(".submitbutton").addClass("error");
    } else {
        $(".formBtn-submit").addClass("ok").prop("disabled", false);
        $(".submitbutton").removeClass("error");
    }
    return true;
}
</script>

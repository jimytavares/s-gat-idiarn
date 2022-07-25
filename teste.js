goodbye!"),v.remove()}),v.find("#surpriseBtn").length&&v.delegate("#surpriseBtn","click",function(){alert("Surprise! you clicked me. i was toast #"+_+". You could perform an action here.")}),v.find(".clear").length&&v.delegate(".clear","click",function(){i.a.clear(v,{force:!0})}))}),e("#clearlasttoast").click(function(){i.a.clear(t)}),
e("#cleartoasts")
    .click(function(){i.a.clear()})}),e(".show-toastr-example").click(function(){i.a.options={
    closeButton:!0,
    debug:!1,
    newestOnTop:!0,
    progressBar:!0,
    positionClass:"toast-bottom-center",
  preventDuplicates:!1,
  onclick:null,
    showDuration:"300",
    hideDuration:"1000",
    timeOut:"5000",
    extendedTimeOut:"1000",
    showEasing:"swing",
    hideEasing:"linear",
    showMethod:"fadeIn",
    hideMethod:"fadeOut"},i.a.info("Você não tem nenhuma atividade em sua agenda!","Atividades")})})}.call(this,n(1))},function(e,t){e.exports=function(){throw new Error("define cannot be used indirect")}},function(e,t,n){"use strict";n.r(t),function(e){var t=n(13);e(document).ready(function(){setTimeout
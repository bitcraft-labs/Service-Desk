$(document).ready(function(){
  $("select").change(function(){
    $(this).find("option:selected").each(function(){
      if($(this).attr("value")=="Incident"){
        $(".incident").show();
        $(".repair").hide();
      }
      else if($(this).attr("value")=="Repair"){
        $(".repair").show();
        $(".incident").hide();
      }
    });
  }).change();
});

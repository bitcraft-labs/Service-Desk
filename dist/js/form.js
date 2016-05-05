var sr_new_response = (function(cats) {
  'use strict';
  var srType = $("#sr_type option:selected").val();
  var srCat1 = document.getElementsByClassName("sr_cat1");
  var srCat2 = document.getElementsByClassName('sr_cat2');
  var spanFix = document.getElementsByClassName('select2');
  console.log(spanFix[2]);
  // For sr type
  if((srType) == '1') {
    console.log(1);
    $(srCat2).hide();
    $(srCat1).show();
  } else if((srType) == '2') {
    console.log(2);
    $(srCat1).hide();
    $(srCat2).show();
  } else {
    $(srCat2).hide();
    $(srCat1).show();
    $(spanFix[2]).hide();
  }
  // For sr category

});




// $(document).ready(function(){
//   $("select").change(function(){
//     $(this).find("option:selected").each(function(){
//       if($(this).attr("value")=="Incident"){
//         $(".incident").show();
//         $(".subinc").show();
//         $(".request").hide();
//         $(".subreq").hide();
//       }
//       else if($(this).attr("value")=="Request"){
//         $(".request").show();
//         $(".subreq").show();
//         $(".incident").hide();
//         $(".subinc").hide();
//       }
//     });
//   }).change();
//   $("radio").checked(function(){
//     if($(this).attr("loaner")=="y"){
//       $(".numloaner").show();
//     }
//     else if ($(this).attr("loaner")=="n"){
//         $(".numloaner").hide();
//     }
//   })
// });

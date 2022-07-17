$(document).ready(function() {
  $("#text").on("keyup",function(event){

    $(".preview").html($(event.currentTarget).val());

  })
  $("#font").on('change',function(event){
      var font_fam = $(this).val();
       $('.preview').css('font-family',font_fam);
  })
  $("#weight").on('change',function(event){
      var font_wei = $(this).val();
       $('.preview').css('font-weight',font_wei);
  })
   $('#size').on('keyup',function(event){
     console.log("hehe");
       var font_siz = $(this).val() + 'px';
       $('.preview').css('font-size',font_siz);
   })
});
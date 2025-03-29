jQuery(document).ready(function() {
  /*MODIFICATION START*/
    jQuery(document).on('scroll', function(){
      if(jQuery('html,body').scrollTop() > jQuery('#first-sec, #second-sec').height()){
  /*MODIFICATION END*/
        jQuery(".progress-bar").each(function() {
          jQuery(this).find(".progress-content").animate({
            width: jQuery(this).attr("data-percentage")
          },2000);
  
          jQuery(this).find(".progress-number-mark").animate({
            left: jQuery(this).attr("data-percentage")
          },{
            duration: 2000,
            step: function(now, fx) {
              var data = Math.round(now);
              jQuery(this).find(".percent").html(data + "%");
            }
          });
        });
  /*MODIFICATION START*/
      }
    });
  /*MODIFICATION END*/
  });
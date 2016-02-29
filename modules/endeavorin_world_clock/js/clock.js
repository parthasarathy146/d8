(function ($, Drupal, drupalSettings) {

  "use strict";
  // All the JavaScript for this file.

  Drupal.behaviors.endeavorin_world_clock = {
    attach: function (context, settings) {
      $('.clock').each(function(idx,elem) {
        // Based on timezone, update the clock every second
        var hours = $('.hour-value',elem).val();
        var minutes = $('.min-value',elem).val();
        var seconds = $('.sec-value',elem).val();
        
        setInterval( function() {
          drawClock(elem,hours,minutes,seconds);
          seconds++;
          if (seconds == 60) {
            seconds = 0;
            minutes++;
          }
          if (minutes == 60) {
            minutes = 0;
            hours++;
          }
          if (hours == 12) {
            hours = 0;          
          }
        }, 1000);
      });            
    }          
  };
  
  function drawClock(elem,hours,minutes,seconds) {
    var sdegree = seconds * 6;
    var srotate = "rotate(" + sdegree + "deg)";
    
    $(".sec",elem).css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
      
    var hdegree = hours * 30 + (minutes / 2);
    var hrotate = "rotate(" + hdegree + "deg)";
    
    $(".hour",elem).css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
        
    var mdegree = minutes * 6;
    var mrotate = "rotate(" + mdegree + "deg)";
      
    $(".min",elem).css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});   
 
  }
  
})(jQuery, Drupal, drupalSettings);
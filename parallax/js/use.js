"use strict";
$(function(){
    //load page full
    $('#fullpage').fullpage({  
        verticalCentered: false,
        navigation: true,
        css3:false,
                  
    });
$(document).ready(function() {
 
});


//conact phone
    $('#contact_phone').click(function(event) {
        console.log('test');
        $('#header_out_right').css('width', '300px');
        $('#contact_phone').hide();
    });
    $('#close-contact').click(function(event) {
       $('#header_out_right').css('width', '0px');
       $('#contact_phone').show('slow');
    });


})

/* ------------------------------------------------------------------------------
*
*  # Velocity.js UI
*
*  Specific JS code additions for extension_velocity_ui.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Run animations
    $('.velocity-animation').on('mouseover', function (e) {

        // Get animation class and panel
        var animation = $(this).data("animation");

        // Add animation class to panel element
        $(this).parents(".divBiselade").velocity("callout." + animation, { stagger: 500 });
        e.preventDefault();
    });
  

});

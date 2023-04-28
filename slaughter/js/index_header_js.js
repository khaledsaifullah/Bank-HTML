var images = [];	
var img1 = new Image();
img1.src = "shoppincartbg.png";
images.push(img1);

jQuery.noConflict();

jQuery.fn.delay = function(time, callback){
    // Empty function:
    jQuery.fx.step.delay = function(){};
    // Return meaningless animation, (will be added to queue)
    return this.animate({delay:1}, time, callback);
}

jQuery(document).ready(function(){

});
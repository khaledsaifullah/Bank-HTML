jQuery.noConflict();
jQuery(document).ready(function(){
	///START: How it works Instruction
	jQuery('#show_light_box_content_link').click(function(event){
		event.preventDefault();
		jQuery.fancybox.showActivity(); 
		var how_it_works = jQuery("#show_light_box_content").html();
		//START:Load Feedback Form
		jQuery.fancybox({
			 'content' : how_it_works
		});
		//END:Load Feedback Form
	});	
	//END: How it works Instruction
});
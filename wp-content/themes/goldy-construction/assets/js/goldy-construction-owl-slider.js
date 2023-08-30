jQuery(document).ready(function() {
	// console.log("construction ready !");
	
	if(construction_main_vars.goldy_mex_testimonial_autoplay === 'true'){
		var auto=true;		
	}else{
		var auto=false;
	}


	var autospeed = construction_main_vars.goldy_mex_testimonial_autoplayspped;   
	var autotime = construction_main_vars.goldy_mex_testimonial_autoplaytime;   

	jQuery('.testinomial_owl_slider').each(function() {
		jQuery(this).addClass('owl-loaded owl-drag').owlCarousel({
	    	navigation : true, // Show next and prev buttons 
	    	loop: true,	
		    slideSpeed : 300,
		    paginationSpeed : 400,	 
		    items : 1, 
		    itemsDesktop : false,
		    itemsDesktopSmall : false,
		    itemsTablet: false,
		    itemsMobile : false,
	    	margin:10,
		    autoplay: auto,
	        autoplaySpeed: autospeed,
	        autoplayTimeout: autotime,
	    	responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:1,
		            nav:false
		        }
		    }
		});	
		
	});
});

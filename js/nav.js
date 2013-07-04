function setupEnquire()
{	
  	
	enquire.register("screen and (max-width: 767px)", {
	    match : function() {

	    	//alert('you are now in mobile mode!');
	    	
	    	enableMobileNav();
	    	  
	    },  
	    unmatch : function() {
		    
	       // alert('you are now en desktop mode');
	        
	        disableMobileNav();
    
	    }
	});
	 
	 
	enquire.listen(500);
 			
}



function enableMobileNav()
{
	

	jQuery( "#navigation" ).off();
	
	
	jQuery( "#navigation" ).slideUp('slow');
	//jQuery( "#navigation" ).append('<div id="closeNav">luk mig!</div>');
	

	jQuery( '#navigationToggle' ).click(function(){

		//openNav();
	
		
		jQuery( "#navigation" ).off();
		jQuery( "#navigation" ).slideToggle();				
		
	});

	
	
	

// alert( document.getElementById("navigationToggle") );

}



function disableMobileNav()
{
	jQuery( "#navigation" ).off();
	
	jQuery( "#navigationToggle" ).off()

 	jQuery( "#navigation" ).show();
 	
 	

}


function openNav(){

		
	jQuery( "#navigation" ).slideUp('fast');

}







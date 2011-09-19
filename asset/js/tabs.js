/**
 * 
 */


	$(function() {
     $(".tab").click(function () {  

             // switch all tabs off  
             $(".active").removeClass("active");
             $(".tab-content").removeClass("show");
       
             // switch this tab on  
             $(this).addClass("active");
             var content_show = $(this).attr("title");  
             $("#"+content_show).addClass("show");

     });
	});
/*
 hides courseware navigation and shows koop menus in sidebar
*/
/* 
    Created on : 11.05.2020, 11:01:38
    Author     : firas
*/
		
$( document ).ready(function() {
	$('a').each(function() {
	    $(this).attr("href", function(index, old) {
	          return old.replace("plugins.php/courseware/courseware", "plugins.php/koop/pages/cw");
	    });
	});
	
	$("#courseware").prependTo(".koop-text-behalter");
	$(".koop-sub-content").appendTo("#layout_content");
	$("#courseware").css("padding-left", "0");
	$("#courseware").show();
	$(".koop-sub-content").show();
});
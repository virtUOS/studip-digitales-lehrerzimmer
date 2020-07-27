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
	
	$(".navigate").attr("data-title","");
	//$(".subchapters").prependTo(".koop-kacheln-behalter");
	$(".chapter.selected").prependTo(".koop-kacheln-behalter");
	// hide first sub section in menu
	$(".active-subchapter").children(".section:first").hide();
	$("ol.subchapters").children(".subchapter:first").hide();
	
	
	$("#courseware").show();
	$(".koop-sub-content").show();
	
	// add styles to the header in sidemenu
	$('.chapter.selected a').each(function() {
	  var text = $(this).html().replace('DIGITALE MEDIAN', '<b>DIGITALE</b> MEDIAN');
	  text = text.replace('BLICK IN DIE FÄCHER', '<b>BLICK IN DIE</b> FÄCHER');
	  text = text.replace('IN DIE PRAXIS', '<b>IN DIE</b> PRAXIS');
	  text = text.replace("DURCH'S STUDIUM", "<b>DURCH'S</b> STUDIUM");
	  $(this).html(text);
	});
});

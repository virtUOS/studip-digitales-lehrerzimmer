
		
$( document ).ready(function() {
   /*
    var text = '';
    $.ajax({
      url: "https://studip3g-test.rz.uni-osnabrueck.de/studip/qplus-koop/plugins.php/KoOp/menu/faecher",
      success: function (data){
            text = data;
      }
    });
	*/
    console.log('dddddddddddd');
	$("#courseware").prependTo(".koop-text-behalter");
	$(".koop-sub-content").appendTo("#layout_content");
	$("#courseware").css("padding-left", "0");
	$(".koop-sub-content").show();
    //console.log($('.cw-sidebar'));
    // $('.cw-sidebar').after(text);
});


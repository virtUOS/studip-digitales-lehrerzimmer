$( document ).ready(function() {
    
    $.ajax({
      url: "https://studip3g-test.rz.uni-osnabrueck.de/studip/qplus-koop/plugins.php/KoOp/menu/faecher",
      success: function (data){
            console.log(data);
      }
    });
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", 'https://studip3g-test.rz.uni-osnabrueck.de/studip/qplus-koop/plugins_packages/virtUOS/KoOp/demo.html', false);
    xmlhttp.send();
    var text = xmlhttp.responseText;
    console.log($('.cw-sidebar'));
     $('.cw-sidebar').after(text);
});


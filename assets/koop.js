$( document ).ready(function() {
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", 'https://studip3g-test.rz.uni-osnabrueck.de/studip/qplus-koop/plugins_packages/virtUOS/KoOp/demo.html', false);
    xmlhttp.send();
    var text = xmlhttp.responseText;
    console.log($('.cw-sidebar'));
     $('.cw-sidebar').after(text);
});


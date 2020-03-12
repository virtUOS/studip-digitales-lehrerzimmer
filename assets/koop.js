$( document ).ready(function() {
    vonSeite = window.open("datei.txt");
    vonSeite.close();
    $('.cw-sidebar').before(vonSeite.document.body.innerText;);
});


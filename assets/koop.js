$( document ).ready(function() {
    vonSeite = window.open("datei.txt");
    $('.cw-sidebar').before(vonSeite.document.body.innerText);
    vonSeite.close();
});


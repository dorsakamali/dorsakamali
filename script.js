function switchMode() {
    var mode = document.body;
    mode.classList.toggle("dark-mode");
}

$(document).ready(function () {
    $("#showHide").click(function () {
        $("p").toggle();
    });

});



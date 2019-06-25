function WpDebug(output) {
    this.log = output;
}

document.addEventListener("DOMContentLoaded", function () {
    var debugElements = document.getElementsByClassName("debug");
    [].forEach.call(debugElements, function (element) {
        var output = new WpDebug(JSON.parse(decodeURIComponent(element.innerHTML)))
        console.log(output);
    });
});
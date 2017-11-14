var customInputFile = document.getElementById("custom-input-file");
var inputFile = document.querySelector(".input-file");
customInputFile.addEventListener('click', function(e) {
    // if (e.keyCode == 13 || e.keyCode == 32) {
        inputFile.click();
    // }
});
inputFile.addEventListener("change", function(e) {
    var file = this.files[0];
    document.querySelector(".file-selected").innerHTML = file.name;
});

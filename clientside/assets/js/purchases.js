var openFormImport = document.getElementById("open-form-import");
var closeFormImport = document.getElementById("close-form-import");
var formImportDiv = $("#form-import-div");

openFormImport.addEventListener('click', function (e) {
    formImportDiv.fadeIn();
});

closeFormImport.addEventListener('click', function (e) {
    formImportDiv.fadeOut();
});

var customImportInput = document.querySelector("#custom-import-input");
var inputFile = document.querySelector(".input-file");

customImportInput.addEventListener('click', function() {
    document.querySelector(".input-file").click();
});
inputFile.addEventListener("change", function(e) {
    var file = this.files[0];
    document.querySelector(".file-selected").innerHTML = file.name;
});
var openFormNewItem = document.getElementById("open-form-new-item");
var closeFormNewItem = document.getElementById("close-form-new-item");
var FormNewItem = document.getElementById("form-new-item");
var nextForm = document.getElementById("next-form");
openFormNewItem.addEventListener('click', function (e) {
    FormNewItem.classList.remove("hidden");
    nextForm.classList.add("col-sm-9");
    closeFormNewItem.classList.remove("hidden");
    openFormNewItem.classList.add("hidden");
});

closeFormNewItem.addEventListener('click', function (e) {
    FormNewItem.classList.add("hidden");
    nextForm.classList.remove("col-sm-9");
    openFormNewItem.classList.remove("hidden");
    closeFormNewItem.classList.add("hidden");
});

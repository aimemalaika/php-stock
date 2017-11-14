function addItemBase() {
    var itemBase = document.getElementById("itemBase");
    var itemBaseSample = document.getElementById("itemBaseSample");
    var dv = document.createElement("div");
    dv.classList.add("row");
    dv.classList.add("pad-x-sm");
    // dv.innerHTML = itemBaseSample.innerHTML;
    itemBase.appendChild(dv);
    dv.innerHTML = itemBaseSample.innerHTML;
}

function removeItemBase() {
    var itemBase = document.getElementById("itemBase");
    if (itemBase.childElementCount < 2) {
        return;
    }
    itemBase.removeChild(itemBase.lastChild);
}

var addBtn = document.getElementById("addItemTrigger");
addBtn.addEventListener('click', function() {
    addItemBase();
});
var removeBtn = document.getElementById("removeItemTrigger");
removeBtn.addEventListener('click', function() {
    removeItemBase();
});
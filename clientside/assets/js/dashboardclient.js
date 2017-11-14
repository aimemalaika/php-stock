var menuBtn = document.getElementById("menu-btn");
var closeBtn = document.getElementById("close-btn");

menuBtn.addEventListener('click', function(e) {
    document.getElementById("aside-menu-left").style.display = 'block';
});

closeBtn.addEventListener('click', function(e) {
    document.getElementById("aside-menu-left").style.display = 'none';
});
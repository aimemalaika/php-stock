var signBtn = document.querySelector("#signBtn");
var signingForm = document.querySelector("#signingForm");
var openChat = document.querySelector("#openChat");
var chatUpper = document.querySelector("#chat-upper");
var chatClose = document.querySelector("#chatClose");
var chatFooter = document.querySelector("#chat-footer");


signBtn.addEventListener('click', function () {
    if (signingForm.classList.contains("shake")) {
        signingForm.classList.remove('shake');
        signingForm.classList.add('shake');
    }else {
        signingForm.classList.add('shake');
    }
});


openChat.addEventListener('click', function(e) {
    e.preventDefault();
    chatUpper.classList.remove("chat-upper-hide");
    chatUpper.classList.add("chat-upper-show");
    chatFooter.classList.add("chat-upper-hide");
});

chatClose.addEventListener('click', function() {
    chatUpper.classList.add("chat-upper-hide");
    chatUpper.classList.remove("chat-upper-show");
    chatFooter.classList.remove("chat-upper-hide");
    // chatFooter.classList.remove("chat-upper-hide");
});

var pricing = document.querySelector(".pricing");
pricing.addEventListener('scroll ', function(e) {
    
})
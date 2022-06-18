function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += "responsive";
    } else {
        x.className = "topnav";
    }
}


/*
//paneb peale klikkimist kinni
var topNav = document.querySelector('#myTopnav');
topNav.addEventListener('click', function (e) {
    if (e.target.tagName === 'A') {
        topNav.classList.remove('responsive');
    }
});



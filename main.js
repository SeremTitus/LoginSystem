var hash = window.location.hash;
if (hash === '#signup') {
    switchtab('signup');
} else if (hash === '#login') {
    switchtab('login');
} else if (hash === '#forgot') {
    switchtab('forget');
} else if (hash === '#entercode') {
    switchtab('entercode');
} else if (hash === '#dashboard') {
    switchtab('dashboard');
}
function switchtab(id) {
    var elements = document.querySelectorAll('.tab-pane.active.show');

    elements.forEach(function (element) {
        element.classList.remove('active', 'show');
        element.classList.add('fade');
    });
    var element = document.getElementById(id);
    if (element) {
        element.className = 'tab-pane active show';
    }
    if (id === "login" || id === "signup") {
        var element2 = document.getElementById('tabs');
        var element3 = document.getElementById('backbtn');
        if (element2) {
            element2.classList.remove('fade');
        }
        if (element3) {
            element3.classList.add('fade');
        }
        var element4 = document.getElementById('ltab');
        var element5 = document.getElementById('stab');
        if (id === "login") {
            if (element4) {
                element4.classList.add('active');
            }
            if (element5) {
                element5.classList.remove('active');
            }
        } else {
            if (element4) {
                element4.classList.remove('active');
            }
            if (element5) {
                element5.classList.add('active');
            }
        }

    } else {
        var element2 = document.getElementById('tabs');
        var element3 = document.getElementById('backbtn');
        if (element2) {
            element2.classList.add('fade');
        }
        if (element3) {
            element3.classList.remove('fade');
        }
    }

}
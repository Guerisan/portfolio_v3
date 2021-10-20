
//Rotation progressive de la boussole au scroll
const compass = document.getElementById('nav_compass');

let totalheight = document.body.scrollHeight - window.innerHeight;

window.onscroll = () => {
    let progressHeight = (window.pageYOffset / totalheight) * 100;

    compass.style.transform = "rotate(" + 360 * progressHeight / 200 + "deg)";
}



//fonctions d'apparition des éléments au scroll
let beacon = document.querySelectorAll('.trigger');
for (let i = 0; i < beacon.length; i++) {
    beacon[i].classList.remove("triggered")
}


let progression = function (elem) {
    let scrolling = window.scrollY;
    let position = scrolling + elem.getBoundingClientRect().top;
    
    return (
        scrolling >= position + window.innerHeight * -.75
        );
 };
    
    
    //Immédiatement au chargement de la page, dans le cas où l'utilisateur ne se trouve pas en haut
    for (let i = 0; i < beacon.length; i++) {
        if (progression(beacon[i])) {
            beacon[i].classList.add("triggered")
        }
        
        document.addEventListener('scroll', function () {
            if (progression(beacon[i])) {
                beacon[i].classList.add("triggered")
            } /* else if (beacon[i].classList.contains("triggered")) {
                beacon[i].classList.remove("triggered")
            } */
        });
    }
    

// Retour visuel du survol de la section associée à l'élément du menu 

//let progression = function (elem) {
//    let scrolling = window.scrollY;
//    let position = scrolling + elem.getBoundingClientRect().top;
//    
//    return (
//        scrolling >= position + window.innerHeight * -.75
//        );
// };
//
//let section = document.querySelectorAll('section');
//
//let active_menu = null;
//
//setactive  = (elem) => {
//
//    if (active_menu !== elem && active_menu !== null){
//        active_menu.classList.remove('active')
//    }
//
//    if (!elem.classList.contains('active')){
//        elem.classList.add('active');
//    }
//
//    if (active_menu !== elem){
//        active_menu = elem;
//    }
//    
//
//}
//
//for (let i = 0; i < section.length; i++) {
//    if (progression(section[i])) {
//        if(section[i].dataset.anchor !== undefined){
//            elem = document.querySelector("#main_nav ul li a[data-anchor=" +section[i].dataset.anchor+ "]");
//             setactive(elem);
//             console.log(elem);
//        } else{
//            active_menu = null;
//        }
//    }
//
//    document.addEventListener('scroll', function () {
//        if (progression(section[i])) {
//            if(section[i].hasAttribute("data-anchor")){
//                elem = document.querySelector("#main_nav ul li a[data-anchor=" +section[i].dataset.anchor+ "]")
//                setactive(elem)
//            } else{
//                active_menu = null;
//            }
//        } /* else if (beacon[i].classList.contains("triggered")) {
//            beacon[i].classList.remove("triggered")
//        } */
//    });
//}
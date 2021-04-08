                    /* TEXTE ACCUEIL */
let nom = document.querySelector('header h1')
let dev = document.querySelector('header h2')

new Typewriter(dev, {
    deleteSpeed: 25
})
    .changeDelay(20)
    .typeString('Développeur Web')
    .pauseFor(700)
    .deleteChars(3)
    .pauseFor(400)
    .typeString('<span style="color: #474a8a">PHP</span>')
    .pauseFor(700)
    .deleteChars(3)
    .pauseFor(400)
    .typeString('<span style="color: #f0db4f">Javascript</span>')
    .pauseFor(700)
    .deleteChars(10)
    .pauseFor(400)
    .typeString('Full-stack')
    .start()

                    /* ANIMATION TITRES */
/* const optss = {
    rootMargin: '0px 0px -50px 0px',
    threshold: 0.1
}

const titress = function (entries, observer) {
    
    entries.forEach(entry => {
        if (entry.isIntersecting > 0.1) {
            titre = entry.target.classList.value
            
            if (titre == 'titre-bleu ') {
                entry.target.classList.add('titre-bleu-ok')
                entry.target.classList.remove('titre-bleu')
            } 
            if (titre == 'titre-blanc') {
                entry.target.classList.add('titre-blanc-ok')
                entry.target.classList.remove('titre-blanc')
            }
            
        }
    });
};

const titres = new IntersectionObserver(titress, optss);

let cible_titre = document.querySelectorAll('main h1')

cible_titre.forEach(element => {
    titres.observe(element)
});
 */

                        /* MENU BURGER */
const navBurger = document.querySelector("#ma-navbar .nav-menu");
const navButton = document.querySelector("#ma-navbar .nav-button");

navButton.addEventListener("click", function (event) {
    // On empêche le "click" de se propager au document
    event.stopPropagation();
    // Ajoute la classe show si le ul ne l'a pas et la retire dans le cas contraire
    navBurger.classList.toggle("show");
})

                        /* SCROLL NAV*/
/**
 * 
 * @param {HTMLElemtent} elem 
 */
const activate = function (elem) {
    const id = elem.getAttribute('id')
    const anchor = document.querySelector(`a[href="#${id}"]`)
    if (anchor === null) {
        return null
    }
    const del = document.querySelectorAll('.active')
    del.forEach(node => node.classList.remove('active'))

    anchor.classList.add('active')
}

/**
 * 
 * @param {IntersectionObserverEntry} entries 
 * @param {IntersectionObserver} observer 
 */
const callback = function (entries, observer) {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            activate(entry.target)
        }
    });
}
const observe = document.querySelectorAll('[data-spy]')
const y = Math.round(window.innerHeight * 0.3)
const observer = new IntersectionObserver((callback), {
    rootMargin: `-${window.innerHeight - y - 1}px 0px -${y}px 0px`
})

spies = document.querySelectorAll('[data-spy]')

if (spies.length > 0) {
    spies.forEach(spie => {
        observer.observe(spie)
    });
}

                    /* ANIMATIONS TIMELINE */
const options = {
    rootMargin: '0px 0px -200px 0px',
    threshold: 0.1
}

const call = function (entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting > 0.1) {
            entry.target.classList.remove('anim-off')
            entry.target.classList.add('anim-on')
        }
    });
};


const intersections = new IntersectionObserver(call, options);

let target = document.querySelectorAll('[data-anim]');
target.forEach(element => {
    intersections.observe(element)
});
                /* ANIMATIONS COMPETENCES */
const opts = {
    rootMargin: '0px 0px -20px',
    threshold: 0.1
}
var compte = 0
const back = function (entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting > 0.1) {
            let values = [
                '80%',
                '85%',
                '75%',
                '60%'
            ]

            entry.target.style.width = values[compte]
            compte = compte + 1
        }
    })
}

const competences = new IntersectionObserver(back, opts);

let cible = document.querySelectorAll('.progress-bar');
cible.forEach(element => {
    competences.observe(element)
});

                    /* ANIMATION PROJETS */
                    /* selection(hover) */
let selectionHover = document.querySelectorAll('.selection li')
selectionHover.forEach(element => {
    element.addEventListener('click', function (e) {
        supprime = document.querySelector('.selection-hover')
        supprime.classList.remove('selection-hover')
        this.classList.add('selection-hover')
    })
});
                /* Selection et apparition des projets*/
//Cible les elements de la selection(all, html, php.....)
selections = document.querySelectorAll('[data-selection]')
selections.forEach(selection => {
    //Ecouteur sur chaque selection au clique
    selection.addEventListener('click', function (e) {
        supprime_projet = document.querySelectorAll('.projet-show')
        supprime_projet.forEach(projet => {
            projet.classList.remove('projet-show')
            projet.classList.add('projet-hidden')
        });

        selectionClass = this.className
        projetsId = document.querySelector(`#${selectionClass}`)
        // Si existe on enleve les projets en vues
        supprime_projets = document.querySelectorAll('.projets-show')
        supprime_projets.forEach(supprime => {
            supprime.classList.remove('projets-show')
        });
        // On met la class projets-show 
        projetsId.classList.add('projets-show')


        // On va chercher ses enfants, on y ajoute la classe projet-show en décaler grace au timer
        enfants = document.querySelectorAll(`#${selectionClass} > .projet-container`)
        let timer = 0
        enfants.forEach(element => {
            setInterval(() => {
                element.classList.add('projet-show')
            }, timer);
            timer += 400
        });

        // Animation au survol d'un projet
        let projetsHover = document.querySelectorAll('.projets-show > .projet-container')

        projetsHover.forEach(element => {
            element.addEventListener('mouseover', function (e) {
                this.classList.add('projet-hover')
                console.log(this)
            })
        });

        projetsHover.forEach(element => {
            element.addEventListener('mouseout', function (e) {
                this.classList.remove('projet-hover')
                console.log(this)
            })
        });


    })

});

const option = {
    rootMargin: '0px 0px -50px 0px',
    threshold: 0.1
}

const project = function (entries, observer) {
    let time = 0
    entries.forEach(entry => {
        if (entry.isIntersecting > 0.1) {
            projet = document.querySelectorAll('[data-project]')

            projet.forEach(element => {
                setInterval(() => {
                    element.classList.add('projet-show')
                }, time);
                time += 400
            });
        }
    });
};

const projets = new IntersectionObserver(project, option);

let cible_projet = document.querySelector('#all');
projets.observe(cible_projet)


/* Animation au survol d'un projet */
let projetsHover = document.querySelectorAll('.projets-show > .projet-container')

projetsHover.forEach(element => {
    element.addEventListener('mouseover', function (e) {
        this.classList.add('projet-hover')
        console.log(this)
    })
});

projetsHover.forEach(element => {
    element.addEventListener('mouseout', function (e) {
        this.classList.remove('projet-hover')
        console.log(this)
    })
});

                        /* FENETRE MODALE */
// On récupère tous les boutons d'ouverture de modale
var modalButtons = document.querySelectorAll("[data-toggle=modal]");
    console.log(modalButtons)
for(let button of modalButtons){
    button.addEventListener("click", function(e){
        // On empêche la navigation
        e.preventDefault();
        // On récupère le data-target
        let target = this.dataset.target
        
        // On récupère la bonne modale
        let modal = document.querySelector(target);
        // On affiche la modale
        modal.classList.add("show");

        // On récupère les boutons de fermeture
        const modalClose = modal.querySelectorAll("[data-dismiss=dialog]");
        
        for(let close of modalClose){
            close.addEventListener("click", function (e) {
                e.preventDefault();
                modal.classList.remove("show");
            });
        }

        // On gère la fermeture lors du clic sur la zone grise
        modal.addEventListener("click", function(){
            this.classList.remove("show");
        });
        // On évite la propagation du clic d'un enfant à son parent
        modal.children[0].addEventListener("click", function(e){
            e.stopPropagation();
        })
    });
}



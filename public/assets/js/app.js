window.onload = function() {
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 150, // Maximum number of particles
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                }
            },
            "opacity": {
                "value": 0.5,
                "random": true
            },
            "size": {
                "value": 4,
                "random": true,
                "anim": {
                    "enable": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 2,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out"
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                }
            },
            "modes": {
                "repulse": {
                    "distance": 100
                },
                "push": {
                    "particles_nb": 4
                }
            }
        },
        "retina_detect": true
    });
}

// Card Animation Script
const cards = document.querySelectorAll('.card-item');
let currentIndex = 0;

function showNextCard() {
    cards[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % cards.length;
    cards[currentIndex].classList.add('active');
}

setInterval(showNextCard, 3000);;

function toggleContent() {
    var content = document.querySelector('.extra-content');
    var button = document.getElementById('readMoreBtn');
    
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
        button.innerHTML = "Read Less";
    } else {
        content.style.display = "none";
        button.innerHTML = "Read More";
    }
}


// Adding the scroll animation functionality
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.tttyd-program-card');

    const handleScroll = () => {
        cards.forEach(card => {
            const cardPosition = card.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (cardPosition < windowHeight - 100) {
                card.classList.add('visible');
            }
        });
    }

    // Initial scroll check
    handleScroll();
    
    // Scroll event listener
    window.addEventListener('scroll', handleScroll);
});


AOS.init({
    duration: 1000, // Animation duration in ms
    once: true, // Animation happens only once
});
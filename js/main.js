// Shery Effects
Shery.mouseFollower();

Shery.makeMagnet(".magnet");


//Scroll
const sections = document.querySelectorAll('section[id]', 'div[id]')

const scrollActive = () => {
    const scrollY = window.pageYOffset
}
window.addEventListener('scroll', scrollActive)


//scroll Animation
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 1500,
    delay: 300,
    //  reset: true
});
sr.reveal(`.hero`)
sr.reveal(`.left`, { origin: 'right' })
sr.reveal(`.right`, { origin: 'left' })


const burger = document.querySelector('.burger')
const body = document.querySelector('body')
const container = document.querySelector('.screen-images__sub');

const toggleBurger = (body, burger, activeClass) => {
    body.classList.toggle('hidden')
    burger.classList.toggle(activeClass)
}
burger.addEventListener('click', () => toggleBurger(body, burger, 'burger__active'))

const mainScreenImageWrapper = document.querySelector('.screen-images__main')
const subScreenImageWrapper = document.querySelector('.screen-images__sub')
const screenNav = document.querySelector('.screen-nav')

if (mainScreenImageWrapper) {
    const mainScreenImage = mainScreenImageWrapper.querySelector('.screen-image img')
    const subScreenImages = subScreenImageWrapper.querySelectorAll('.screen-image img')

    subScreenImages.forEach(image => {
        image.addEventListener('click', (e) => {
            mainScreenImage.setAttribute('src', e.target.getAttribute('src'))
        })
    })
}

const tabs = document.querySelectorAll('.tab')

if(screenNav){
    const navButtons = screenNav.querySelectorAll('.button-nav')
    const activeClass = 'button-nav__active'
    if(tabs){
        navButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const activeButton = screenNav.querySelector('.button-nav__active')
                const {id} = button.dataset

                if(!e.target.classList.contains(activeClass)){
                    activeButton.classList.remove(activeClass)
                    e.target.classList.add(activeClass)
                }
            })
        })
    }
}





if(container){
    let startY;
    let startX;
    let scrollLeft;
    let scrollTop;
    let isDown;

    container.addEventListener('mousedown',e => mouseIsDown(e));
    container.addEventListener('mouseup',e => mouseUp(e))
    container.addEventListener('mouseleave',e=>mouseLeave(e));
    container.addEventListener('mousemove',e=>mouseMove(e));

    function mouseIsDown(e){
        isDown = true;
        startY = e.pageY - container.offsetTop;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
        scrollTop = container.scrollTop;
    }
    function mouseUp(e){
        isDown = false;
    }
    function mouseLeave(e){
        isDown = false;
    }
    function mouseMove(e){
        if(isDown){
            e.preventDefault();
            const x = e.pageX - container.offsetLeft;
            const walkX = x - startX;
            container.scrollLeft = scrollLeft - walkX;
        }
    }
}

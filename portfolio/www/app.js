// Animation de la nav bar au scroll de 120px en partant du top

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
        $('#nav').removeClass('m-2')
        $('#nav').removeClass('rounded-pill')
        $('.nav-link').removeClass('fs-5')
        $('#logo').css('height','50px')
        $('#logo').css('width','50px')
        $('#nav').css('transition', '0.8s')
    
    
    } else {
        $('#nav').addClass('m-2')
        $('#nav').addClass('rounded-pill')
        $('.nav-link').addClass('fs-5')
        $('#logo').css('height','75px')
        $('#logo').css('width','75px')
        $('#nav').css('transition', '0.8s')
    }
    }

document.querySelector('#nav').addEventListener('mouseover', () => {
    document.querySelector('#logo').style.height = "125px"
    document.querySelector('#logo').style.width = "125px"
    document.querySelector('#logo').style.transition = "0.5s"
})

document.querySelector('#nav').addEventListener('mouseout', () => {
    document.querySelector('#logo').style.height = scrollFunction()
    document.querySelector('#logo').style.width = scrollFunction()
     document.querySelector('#logo').style.transition = "0.5s"
})
/* ========== EXPANDIR MENU ========== */ 

const showMenu = (toggleid, navbarid, bodyid) =>{
    const toggle = document.getElementById(toggleid),
    navbar = document.getElementById(navbarid),
    bodypadding = document.getElementById(bodyid)

    if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
            navbar.classList.toggle('expander')

            bodypadding.classList.toggle('body-pd')
        })
    } 
}
showMenu('nav-toggle', 'navbar', 'body-pd')

/* ======= LINK ATIVADO =======*/ 

const linkColor = document.querySelectorAll('.nav__link')
function colorLink(){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))


/* ======= COLAPSE MENU =======*/ 

const linkCollapse = document.getElementsByClassName('collapse__link')
var i
    
for(i=0;i<linkCollapse.length;i++){

        linkCollapse[i].addEventListener('click', function(){
            const collapseMenu = this.nextElementSibling
            collapseMenu.classList.toggle('showCollapse')

            const rotate = collapseMenu.previousElementSibling
            rotate.classList.toggle('rotate')
        })
}
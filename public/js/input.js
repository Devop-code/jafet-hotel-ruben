const select = document.querySelector('.select-room')
const num = document.querySelector('.number')
const selectPopup = document.getElementById('select-room')
const closer = document.getElementById('closer');
const button = document.getElementById('add')


let donnee = []
selectPopup.addEventListener('click',()=>{
    select.classList.add('select-room-popup')
})

closer.addEventListener('click',()=>{
    select.classList.remove('select-room-popup')
})

function adder(liste){
    donnee.push({
        chambre: this.textContent,
        num: num.value
    })
}

const c1 = document.querySelector('.chambre1')
const c2 = document.querySelector('.chambre2')
const c3 = document.querySelector('.chambre3')
const c4 = document.querySelector('.chambre4')


c1.addEventListener('click',()=>{
    const room1 = document.querySelector('n1')
    if(donnee.hasOwnProperty(c1.textContent)) {
        donnee[c1.textContent]++
        room1.textContent = donnee[" Haut standing :télé Clim wifi baignoire 62€ "]   
    }else{
        donnee[c1.textContent] = c1.value
        room1.textContent = donnee[" Haut standing :télé Clim wifi baignoire 62€ "] 
    }
    num.value = Object.keys(donnee).map(cle => `${cle}:${donnee[cle]}`).join(',')
    room1.textContent = donnee[c1.textContent]
})

c2.addEventListener('click',()=>{
    if(donnee.hasOwnProperty(c2.textContent)) {
        donnee[c2.textContent]++   
    }else{
        donnee[c2.textContent] = c2.value 
    }
    num.value = Object.keys(donnee).map(cle => `${cle}:${donnee[cle]}`).join(',')
})

c3.addEventListener('click',()=>{
    if(donnee.hasOwnProperty(c3.textContent)) {
        donnee[c3.textContent]++   
    }else{
        donnee[c3.textContent] = c3.value 
    }
    num.value = Object.keys(donnee).map(cle => `${cle}:${donnee[cle]}`).join(',')
})

c4.addEventListener('click',()=>{
    if(donnee.hasOwnProperty(c4.textContent)) {
        donnee[c4.textContent]++   
    }else{
        donnee[c4.textContent] = c4.value 
    }
    num.value = Object.keys(donnee).map(cle => `${cle}:${donnee[cle]}`).jo



})
// let chambres = document.querySelectorAll('.chambre')
//     chambres.forEach(chambre =>{
//         chambre.addEventListener('click',()=>{
//             num.classList.remove('number')
            
//             chambre.classList.remove('number')

//         })
//     })
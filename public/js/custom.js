// make function on click when btn search is clicked

let btnSearch = document.getElementById('search');
let menu = document.getElementById('menu');

btnSearch.addEventListener('focus', () => {
    // console.log('berhasil 1');
    menu.classList.add('translate-x-24');
})

btnSearch.addEventListener('blur', () => {
    // console.log('berhasil 2');
    menu.classList.remove('translate-x-24');
})

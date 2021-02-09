/* The design was inspired by https://uidesigndaily.com/posts/sketch-table-list-day-1262 */

const createNew = document.getElementById('createNew');
const table = document.getElementById('table');
const modal = document.getElementById('modal');
const form = document.getElementById('form');

createNew.addEventListener('click', () => {
    modal.style.display = 'block';
    form.addEventListener('submit', openModal);
});

// Open Modal


// Close Modal
window.addEventListener('click', e => {
    if(e.target === modal){
        modal.style.display = 'none';
    }
})
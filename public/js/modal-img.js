let imgProduct = document.getElementById('imgProduct');
let imgBack = document.getElementsByClassName('modal-container')[0];

imgProduct.addEventListener('click', (e) => {
    document.getElementsByClassName('modal-container')[0].classList.add('active');
});

imgBack.addEventListener('click', (e) => {
    document.getElementsByClassName('modal-container')[0].classList.remove('active');
});
const $ = window.document;

$.querySelector('#nav-popup').addEventListener('click', function (event) {
    let modal = $.querySelector('#modal-container');
    if (modal.classList.contains('active')) {
        modal.classList.remove('active');
    } else {
        modal.classList.add('active');
    }
});

$.querySelector('#modal-container .modal-mask').addEventListener('click', function (event) {
    let modal = $.querySelector('#modal-container');
    if (modal.classList.contains('active')) {
        modal.classList.remove('active');
    } else {
        modal.classList.add('active');
    }
});
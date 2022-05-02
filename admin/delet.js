const btnDelete = document.querySelectorAll('.btnSup');

btnDelete.forEach(btn => {
    btn.addEventListener('click', (event) =>{
        event.preventDefault();
        const href = btn.href;
        const modalDelete = document.querySelector('.deletModal');
        modalDelete.href = href;
        const modal = new bootstrap.Modal(document.querySelector('#confirmDelete'));
        modal.show()
    })
});
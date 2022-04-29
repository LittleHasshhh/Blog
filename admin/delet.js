const btnDelete = document.querySelectorAll('.btnSup');

btnDelete.forEach(btn => {
    btn.addEventListener('click', (event) =>{
        event.preventDefault();
        const modal = new bootstrap.Modal(document.querySelector('#confirmDelete'));
        modal.show()
    })
});

const form = document.getElementById('form')
const input = document.querySelectorAll('input')


form.addEventListener('submit', (ev) => {
    ev.preventDefault()
    Swal.fire({
        'title': 'Ok',
        'text': 'Dados enviados com sucesso!',
        'icon': 'success',
    })
   
})

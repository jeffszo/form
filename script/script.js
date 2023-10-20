
const form = document.getElementById('form')
const input = document.querySelectorAll('input')

const nameInput = document.getElementById('nameInput')
const nameLabel = document.getElementById('nameLabel')

const emailInput = document.getElementById('emailInput')
const emailLabel = document.getElementById('emailLabel')

const phoneInput = document.getElementById('phoneInput')
const phoneLabel = document.getElementById('phoneLabel')

const sexoLabel = document.getElementById('sexoLabel')

nameInput.addEventListener('keyup', () => {
    if (nameInput.value.length <= 2) {
        nameLabel.setAttribute('style', 'color: #dd2d4a')
        nameLabel.innerText = 'Nome *Insira no mínimo 3 caracteres'
        nameInput.setAttribute('style', 'border-bottom-color: #dd2d4a')

    } else {
        nameLabel.setAttribute('style', 'color: #52b788')
        nameInput.setAttribute('style', 'border-bottom-color: green')
        nameLabel.innerText = 'Nome:'
    }
})

emailInput.addEventListener('keyup', (emailInput) => {
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    const email = emailInput.target.value

    if (regex.test(email)) {
        emailLabel.setAttribute('style', 'color: #52b788')
        emailLabel.innerText = 'Email:'
        emailInput.setAttribute('style', 'border-bottom-color: #52b788')
    } else {
        emailLabel.setAttribute('style', 'color: #dd2d4a')
        emailLabel.innerText = 'Nome *Insira um email válido!'
        emailInput.setAttribute('style', 'border-bottom-color: #dd2d4a')
    }
})

phoneInput.addEventListener('keyup', () => {
    if (phoneInput.value.length <= 10 || phoneInput.value.length > 11) {
        phoneLabel.setAttribute('style', 'color: #dd2d4a')
        phoneLabel.innerText = 'Telefone *Insira um número válido'
        phoneInput.setAttribute('style', 'border-bottom-color: #dd2d4a')

    } else if(phoneInput.value.length == 11) {
        phoneLabel.setAttribute('style', 'color: #52b788')
        phoneInput.setAttribute('style', 'border-bottom-color: green')
        phoneLabel.innerText = 'Telefone:'
    }
})



form.addEventListener('submit', (ev) => {
    ev.preventDefault()
    Swal.fire({
        'title': 'Ok',
        'text': 'Dados enviados com sucesso!',
        'icon': 'success',
    })

})

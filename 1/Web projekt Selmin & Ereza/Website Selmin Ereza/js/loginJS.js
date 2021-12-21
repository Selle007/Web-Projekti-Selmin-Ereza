const email = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')


form.addEventListener('submit', (e) => {
    let messages = []
    if (email.value === ''|| email.value == null){
        messages.push('Email required')
    }

if (password.value.length <= 6){
    messages.push('Password mus be longer than 6 char')
}

    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    
    
})
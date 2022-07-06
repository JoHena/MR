document.addEventListener('click', e => {
//Checa si es un dropdown, checks if its a drop down
    const isDropDownButton = e.target.matches("[data-dropdown-btn]")
    if(!isDropDownButton && e.target.closest('[data-dropdown]') !=  null) return

    let currentDropdown
    if(isDropDownButton) {
        currentDropdown = e.target.closest('[data-dropdown]')
        currentDropdown.classList.toggle('active');
    }

//Cierra los demas drop downs, Closes the other drop downs

    document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
        if(dropdown === currentDropdown) return
        dropdown.classList.remove('active')
    })
})  

//Popup login

document.querySelector("#show-login").addEventListener("click", function(){
    document.querySelector(".pop-up").classList.add("active");
    document.querySelector(".pop-up-register").classList.remove("active");
})

document.querySelector(".pop-up .close-btn").addEventListener("click", function(){
    document.querySelector(".pop-up").classList.remove("active");
})

//Popup Register

document.querySelector("#show-register").addEventListener("click", function(){
    document.querySelector(".pop-up-register").classList.add("active");
    document.querySelector(".pop-up").classList.remove("active");
})

document.querySelector(".pop-up-register .close-btn-register").addEventListener("click", function(){
    document.querySelector(".pop-up-register").classList.remove("active");
})


//Validation - Validacion 

const form = document.getElementById('form-reg');
const username = document.getElementById('username');
const email = document.getElementById('remail');
const password = document.getElementById('rpassword');
const password2 = document.getElementById('rpassword2');

form.addEventListener('submit', e => {
    

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        setError(username, 'El nombre de usuario es requerido.');
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'El correo es requerido.');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Porfavor ingrese un correo valido.');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'La contraseña es requerida.');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'La contraseña debe ser mayor a 8 caracteres.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Porfavor confrime su contraseña');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Las contraseñas no coinciden");
    } else {
        setSuccess(password2);
    }

};


// Bars

document.addEventListener('click', e => {
    //Checa si es una barra, checks if its a bar
        const isBar = e.target.matches("[data-bar]")    
    
        let currentBar
        if(isBar) {
            currentBar = e.target;
            currentBar.classList.toggle('active');
        }
    
    //Quita el color de las demas barras, Un colors the other bars
    
        document.querySelectorAll("[data-bar].active").forEach(bar => {
            if(bar === currentBar) return
            bar.classList.remove('active')
        })
    })

//

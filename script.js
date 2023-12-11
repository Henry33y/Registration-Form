console.log("😌");
const form = document.getElementById('join_form')
const inputFirstName = document.getElementById('first_name')
const inputLastName = document.getElementById('last_name')
const inputStudentId = document.getElementById('student_id')
const inputEmail = document.getElementById('email')
const inputPassword = document.getElementById('password')
const inputPassword2 = document.getElementById('password2')
const submitBtn = document.getElementById('submit_btn')
const showPassword = document.getElementById('show_password')

form.addEventListener('submit',(e)=>{
    e.preventDefault()

    if(validateInputs()){
        form.submit()
        console.log("hello");
    }
    else{
        console.log("wrong");

    }
})

const setError = (element, error) => {
    const errorDisplay = element.nextElementSibling
    errorDisplay.innerText = error
    element.classList.add('error')
    element.classList.remove('success')
}
const setSuccess = (element) => {
    const successDisplay = element.nextElementSibling
    successDisplay.innerText = ''
    element.classList.remove('error')
    element.classList.add('success')
}


const validatePassword = () => {
    const passwordValue = inputPassword.value
    const password2Value = inputPassword2.value
    if(password2Value === ''){
        setError(inputPassword2, "Please confirm your password");
        return false;
    }else if((password2Value !== '' || passwordValue !== '') && password2Value !== passwordValue){
        setError(inputPassword2,"Passwords do not match")
        return false
    }else{
        // setSuccess(inputPassword2)
        return true
    }
}

const validateField = (element,error) => {
    const elementValue = element.value.trim()
    if(elementValue == ''){
        setError(element,error)
        return false
    }
    else{
        setSuccess(element)
        return true
    }
}

const validateInputs = () => {
    const isValidFirstName = validateField(inputFirstName,"First name cannot be empty")
    const isValidLastName = validateField(inputLastName,"Last name cannot be empty")
    const isValidStudentId = validateField(inputStudentId,"Please enter your student id")
    const isValidEmail = validateField(inputEmail,"Email cannot be empty")
    const isValidPassword = validateField(inputPassword,"Password cannot be empty")
    const isValidPassword2 = validateField(inputPassword2,"Please confirm password")
    const isValidPasswordMatch = validatePassword()
    
    return isValidFirstName && isValidLastName && isValidEmail && isValidPassword && isValidStudentId && isValidPassword2 && isValidPasswordMatch
}

showPassword.addEventListener('change',() => {
    if(showPassword.checked){
        inputPassword.type = 'text';
        inputPassword2.type = 'text';
    }else{
        inputPassword.type = 'password';
        inputPassword2.type = 'password';
    }
})
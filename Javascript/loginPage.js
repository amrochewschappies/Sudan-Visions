const signInButton = document.querySelector("#sign-in-button");
const signUpButton = document.querySelector("#sign-up-button");
const signUpForm = document.querySelector("#sign-up-form");
const loginForm = document.querySelector("#login-form");
let signingIn = true;

signInButton.addEventListener("click", function(){
    if (!signingIn){
        signingIn = true;
        signInButton.classList.add("toggled");
        signUpButton.classList.remove("toggled");
        signUpButton.style.backgroundColor = "rgba(227, 227, 227, 0.789)";
        signInButton.style.backgroundColor = "#939393";
        signUpForm.style.opacity = "0";
        setTimeout(() => {
            signUpForm.style.display = "none"; 
            loginForm.style.display = "block"; 
            setTimeout(() => {
                loginForm.style.opacity = "1"; 
            }, 50); 
        }, 500); 
    }
})

signUpButton.addEventListener("click", function(){
    if (signingIn){
        signingIn = false;
        signUpButton.classList.add("toggled");
        signInButton.classList.remove("toggled");
        signInButton.style.backgroundColor = "rgba(227, 227, 227, 0.789)";
        signUpButton.style.backgroundColor = "#939393";
        loginForm.style.opacity = "0";
        setTimeout(() => {
            loginForm.style.display = "none";
            signUpForm.style.display = "block"; 
            setTimeout(() => {
                signUpForm.style.opacity = "1"; 
            }, 50); 
        }, 500);
    }
})

let inputFields = document.querySelectorAll("input");
inputFields.forEach(inputField => {
   inputField.addEventListener("click", ()=>{
      inputField.style.height = "45px";
   }) 
});
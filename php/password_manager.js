const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");
togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
                            
    // toggle the icon
    this.classList.toggle("bi-eye");
    });

const togglePassword2 = document.querySelector("#togglePassword2");
const confirm_password = document.querySelector("#confirm_password");

togglePassword2.addEventListener("click", function () {
    // toggle the type attribute
    const type = confirm_password.getAttribute("type") === "password" ? "text" : "password";
    confirm_password.setAttribute("type", type);
                        
    // toggle the icon
    this.classList.toggle("bi-eye");
    });
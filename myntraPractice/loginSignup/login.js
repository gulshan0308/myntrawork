let login_btn = document.getElementById("login_link");
let signup_btn = document.getElementById("signup_link");
let signup_box = document.getElementById("signup");
let login_box = document.getElementById("login");
let signup_frm = document.getElementById("signup_frm")


login_btn.onclick = function(){
    signup_box.style.display = "none";
    login_box.style.display = "block";
    
};

signup_btn.onclick = function(){
    login_box.style.display = "none";
    signup_box.style.display = "block";
};

// signup form

signup_frm.onsubmit = function(event){

    event.preventDefault();

    let user = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let pass = document.getElementById("password").value;

    let user_object_data = {
        username: user,
        email: email,
        phone: phone,
        password: pass
    }
    let user_text_data = JSON.stringify(user_object_data);

    if(user != "" && email != "" && phone != "" && pass != ""){
        localStorage.setItem(email, user_text_data);
        let signupButton = document.getElementById("signup_btn");
        signupButton.style.background = "#14b129";
        signupButton.value = "Sign up Successful!";
        
        setTimeout(function () {
            signupButton.style.background = "linear-gradient(to right, #E100FF, #7F00FF)";
            signupButton.value = " Sign up ";
        }, 3000);

        signup_frm.reset();
        
    };
};

let email_input = document.getElementById("email");
email_input.onchange = function(){
    let email = document.getElementById("email").value;
    let warning = document.getElementById("email_alert");
    let signup_btn = document.getElementById("signup_btn");

    if(localStorage.getItem(email) != null){
        email_input.style.borderBottomColor = "red";
        warning.style.display = "block";
        signup_btn.disabled = true;
        signup_btn.style.background = "#ccc";

        email_input.onclick = function(){
            email_input.value = "";
            warning.style.display = "none";
            email_input.style.borderBottomColor = "#ccc";
            signup_btn.disabled = false;
            signup_btn.style.background = "linear-gradient(to right, #E100FF, #7F00FF)";

        };
    };
};

//Login Form


let login_frm = document.getElementById("login_frm");

login_frm.onsubmit = function (event) {
    event.preventDefault();

    let email = document.getElementById("login_email");
    let password = document.getElementById("login_password");
    let login_email_validation = document.getElementById("login_email_validation");
    let login_password_validation = document.getElementById("login_password_validation");

    if (localStorage.getItem(email.value) === null) {

        login_email_validation.style.display = "block";
        email.style.borderBottomColor = "red";

        email.onclick = function(){
            email.value = "";
            login_email_validation.style.display = "none";
            email.style.borderBottomColor = "#ccc";
        }

    } else {
        let text_data = localStorage.getItem(email.value);
        let obj_data = JSON.parse(text_data);
        let correct_email = obj_data.email;
        let correct_password = obj_data.password;

        if (email.value === correct_email) {
            

            if(password.value === correct_password){

                alert("Login Success");

                } else{
                    login_password_validation.style.display = "block";
                    password.style.borderBottomColor = "red";
        
                    password.onclick = function(){
                    password.value = "";
                    login_password_validation.style.display = "none";
                    password.style.borderBottomColor = "#ccc";

                };
            };
        };
    };
    
};

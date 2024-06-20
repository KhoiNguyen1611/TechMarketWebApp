function validate_username(){
    var name = document.querySelector("#username").value;
    var name_ptn = /^(?=.*\d)(?=.*[a-z])(?!\W+)(?=.*[A-Z])(?!.*\s).{8,15}$/;
    if(name.match(name_ptn)){
        return true;
    }
    else{
        return false;
    }
}

function validate_password(){
    var pwd = document.querySelector("#password").value;
    var pwd_ptn = /^(?=.*\d)(?=.*[a-z])(?=.*[!@#\$%\^\&*])(?=.*[A-Z])(?!.*\s).{8,20}$/;
    if(pwd.match(pwd_ptn)){
        return true;
    }
    else{
        return false;
    }
}

function validate_address(){
    var add = document.querySelector("#address").value;
    var add_ptn = /^.{5,}$/;
    if(add.match(add_ptn)){
        return  true;
    }
    else{
        return false;
    }
}

function validate(){
    if (validate_address() === false || validate_password() == false || validate_username() == false){
        alert("Requirement: \n Username: 8-15 characters, one lowercase and one uppercase and one digit \n Password: 8-20 characters, at least one lowercase, one uppercase, one digit and only !@#$%^&* allowed \n Address: At least 5 characters")
    }
}
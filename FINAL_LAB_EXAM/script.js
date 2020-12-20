"use strict"


function emptyLoginFieldCheck()
{
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let isEmpty = false;

    

    if (username == "")
    {
        document.getElementById("usernameError").innerHTML = "*required";
        isEmpty = true;

    }

    if (password == "")
    {
        document.getElementById("passwordError").innerHTML = "*required";
        isEmpty = true;

    }
    
    if (isEmpty)
    {
        return false;
    }
    else
    {
        return true;
    }

}



function clearField(errorFieldId)
{

    document.getElementById(errorFieldId).innerHTML = "";


}


function validateRegistration()
{
    let name = document.getElementById("name").value;
    let contact = document.getElementById("contact").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;

    let hasError = false;



    if (name == "")
    {
        document.getElementById("nameError").innerHTML = "*required";
        hasError = true;
    }
    else
    {
        if (!(name.toLowerCase() != name.toUpperCase()) || !(name[0].toLowerCase() != name[0].toUpperCase()) ) {

            document.getElementById("nameError").innerHTML = "*invalid";
            hasError = true;
        }
        else if (name.split(" ").length < 2)
        {
            document.getElementById("nameError").innerHTML = "*at least two words";
            hasError = true;
        }

    }



    if (contact == "")
    {
        document.getElementById("contactError").innerHTML = "*required";
        hasError = true;

    }



    if (username == "")
    {
        document.getElementById("usernameError").innerHTML = "*required";
        hasError = true;

    }


    if (password == "")
    {
        document.getElementById("passwordError").innerHTML = "*required";
        hasError = true;

    }
    else if (confirmPassword == "")
    {
        document.getElementById("confirmPasswordError").innerHTML = "*required";
        hasError = true;

    }
    else
    {
        if (password != confirmPassword) {
            document.getElementById("passwordError").innerHTML = "*mismatch";
            document.getElementById("password").value = "";
            document.getElementById("confirmPassword").value = "";
            hasError = true;
        }
    }



    if (hasError)
    {
        return false;
    }
    else
    {
        return true;
    }



}
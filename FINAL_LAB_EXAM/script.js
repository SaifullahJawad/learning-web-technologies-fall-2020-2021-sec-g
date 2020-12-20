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
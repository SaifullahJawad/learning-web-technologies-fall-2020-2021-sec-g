"use strict"

function validateName()
{
    let name = document.getElementById("name").value;
    
    

	if(name == "")
    {
        alert("Field cannot be empty");
    }
    else
    {

        if(name.split(" ").length >= 2  && ctype_alpha($name[0]) &&  typeof name.replace(" ", "") != "string"  )
        {
            
            alert("valid");
        }
        // else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)) && $name[strlen($name)-1] != "." )
        // {
        //     echo "Your name is $name";
        // }
        // else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)) && $name[strlen($name)-1] != "-" )
        // {
        //     echo "Your name is $name";
        // }
        // else
        // {
        //     echo "Invalid Name";
        // }

    }
}

// function getName(){
// 	let name = document.getElementById('name').value;
// 	alert(name);
// 	document.getElementById('head').innerHTML = name;
// }
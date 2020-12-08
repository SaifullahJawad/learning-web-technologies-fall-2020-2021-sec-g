"use strict"

function validateName()
{
    let name = document.getElementById("name").value;

    if (name == "")
    {
        alert("Field cannot be empty");
    }
        
    else
    {
        if (typeof name == "string")
        {
            alert("not string");
        }
        // if (name.split(" ").length >= 2 && typeof name.replace(" ", "") != "string") {
            
        //     alert("valid");
        // }

    }

    
}

















// <?php


//     if(isset($_POST['submit']))
//     {
        
//         if(empty($_POST["name"]))
//         {
//             echo "Name field is empty! Please enter your name";
//         }
//         else if(empty($_POST["email"]))
//         {
//             echo "Email field is empty! Please enter your email!";
//         }
//         else if(!isValidGender())
//         {
//             echo "Gender is not selected";
//         }
//         else if(empty($_POST["day"]))
//         {
//             echo "Day field of DOB is empty! Please enter your DOB properly!";
//         }
//         else if(empty($_POST["month"]))
//         {
//             echo "Month field of DOB is empty! Please enter your DOB properly!";
//         }
//         else if(empty($_POST["year"]))
//         {
//             echo "Year field of DOB is empty! Please enter your DOB properly!";
//         }
//         else if( !isValidBloodGroup($_POST["bloodGroup"]) )
//         {
//             echo "Blood group is not selected";
//         }
//         else if( !isValidDegree())
//         {
//             echo "Select at least one of the degrees";
//         }
//         else if(empty($_POST["picture"]))
//         {
//             echo "Picture field is empty! Please upload a picture!";
//         }
//         else
//         {


//             if(!isValidName($_POST["name"]))
//             {
//                 echo "Invalid user name";
//             }
//             else if(!isValidEmail($_POST["email"]))
//             {
//                 echo "Invalid email address!";
//             }
//             else if( !isValidDOB($_POST["day"], $_POST["month"], $_POST["year"]) )
//             {
//                 echo "Invalid DOB";
//             }
//             else
//             {
//                 echo "Your name is {$_POST["name"]} <br>";
//                 echo "Your email address is {$_POST["email"]} <br>";
//                 echo "Your gender is {$_POST["Genders"]} <br>";
//                 echo "Your birthdate is {$_POST["day"]}/{$_POST["month"]}/{$_POST["year"]} <br>";
//                 echo "Your blood group is {$_POST["bloodGroup"]} <br>";

                
//                 if( isset($_POST["SSC"]) && !isset($_POST["HSC"]) && !isset($_POST["BSc"]))
//                 {
//                     echo "You have completed SSC";
//                 }
//                 else if( !isset($_POST["SSC"]) && isset($_POST["HSC"]) && !isset($_POST["BSc"]))
//                 {
//                     echo "You have completed HSC";
//                 }
//                 else if( !isset($_POST["SSC"]) && !isset($_POST["HSC"]) && isset($_POST["BSc"]))
//                 {
//                     echo "You have completed BSc";
//                 }
//                 else if( isset($_POST["SSC"]) && isset($_POST["HSC"]) && !isset($_POST["BSc"]))
//                 {
//                     echo "You have completed SSC and HSC";
//                 }
//                 else if( isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]))
//                 {
//                     echo "You have completed SSC, HSC and BSc";
//                 }
//                 else if( !isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]))
//                 {
//                     echo "You have completed HSC and BSc";
//                 }
//                 else
//                 {
//                     echo "You have completed SSC and BSc";
//                 }
                
                
//             }


//         }



        

        
//     }


//     function isValidName( $name )
//     {
//         if(str_word_count($name) >= 2  && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(" ", "", $name)) )
//         { 
//             return true;
//         }
//         else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)) && $name[strlen($name)-1] != "." )
//         {
//             return true;
//         }
//         else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)) && $name[strlen($name)-1] != "-" )
//         {
//             return true;
//         }
//         else
//         {
//             return false;
//         }
//     }


//     function isValidEmail( $email)
//     {

//         $atSign = strpos($email, "@");
//         $lastDot = strripos($email, ".");


//         if($atSign > 0 && $email[$atSign+1] != "." && substr_count($email, "@") == 1 && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
//         {
//             return true;
//         }
//         else
//         {
//             return false;
//         }
//     }

//     function isValidGender()
//     {
//         if(isset($_POST["Genders"]))
//         {
//             return true;
//         }
//         else
//         {
//             return false;
//         }
//     }


//     function isValidDOB($day, $month, $year)
//     {


//         if( $day >= 1 && $day <=31 && $month >= 1 && $month <= 12 && $year >= 1900 && $year <= 2016)
//         {

//             if( ($month == 4 || $month == 6 ||  $month == 9 || $month == 11 ) && $day <= 30 )
//             {
//                 return true;
                
//             }
//             else if( ($month == 1 || $month == 3 ||  $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12 ) && $day <= 31 )
//             {
//                 return true;

//             }
//             else if( $month == 2 && $day <= 28 )
//             {
//                 return true;

//             }
//             else
//             {
//                 return false;
//             }
//         }
//         else
//         {
//             return false;
//         }


//     }


//     function isValidBloodGroup( $bloodGroup )
//     {
        
//         if( !empty($bloodGroup) )
//         {
//             return true;
//         }
//         else
//         {
//             return false;
//         }

//     }


//     function isValidDegree()
//     {

//         if( isset($_POST["SSC"]) || isset($_POST["HSC"])|| isset($_POST["BSc"]) )
//         {
//             return true;
//         }
//         else
//         {
//             return false;
//         }

//     }



// ?>
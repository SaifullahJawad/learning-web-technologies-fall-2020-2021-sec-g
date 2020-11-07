<?php

    if (realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ))
    {
        header("HTTP/1.0 404 Not Found");
        exit();  

    }


?>





<td width="270px" valign="top">
                
                <table style="padding-left: 15px;" width="100%">


                    <tr>
                        <td>
                            <h2>Account</h2>
                            <hr>
                        </td>
                    </tr>



                    <tr>
                        <td>

                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewProfile.php">View Profile</a></li>
                                <li><a href="editProfile.php">Edit Profile</a></li>
                                <li><a href="profilePicture.php">Change Profile Picture</a></li>
                                <li><a href="changePassword.php">Change Password</a></li>
                                <li><a href="logOut.php">Logout</a></li>
                            </ul>

                        </td>
                        
                    </tr>


                </table>

</td>
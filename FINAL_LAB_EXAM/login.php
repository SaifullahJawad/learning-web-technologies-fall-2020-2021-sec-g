
<!DOCTYPE html>
<html>

<head>
    <title> Login </title>
</head>

<body>

    <form action="loginControl.php" method="POST">

        <fieldset style="display: inline-block;">

            <legend>
                <h3>LOGIN</h3>
            </legend>

            <table>

                <tr>
                    <td>
                        <label for="username">Username: </label><br>
                        <input type="text" id="username" name="username" onclick="clearField('usernameError');">
                    </td>
                    <td id="usernameError" width="120px" style="color: red;"><?php if(isset($_GET["msg"])){echo "*invalid userId or password";}?></td>

                </tr>


                <tr>
                    <td>
                        <label for="password">Password: </label><br>
                        <input type="password" id="password" name="password" onclick="clearField('passwordError');">
                    </td>
                    <td id="passwordError" width="120px" style="color: red;"></td>

                </tr>


                

               

                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="rememberMe" value="rememberMe" id="rememberMe">
                        <label for="rememberMe"> Remember Me </label>
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="login" value="Login" onclick="return emptyLoginFieldCheck();">
                        <a href="register.html">Register</a>
                    </td>
                </tr>

            </table>

        </fieldset>

    </form>

    <script type="text/javascript" src="script.js"></script>

</body>

</html>
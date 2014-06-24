
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="signupstyle.css">
        <script type="text/javascript" src="signup.js"></script>
    </head>
    <body>
        <div id="obox">

            <form action="newuser.php" method="post" id="sform">

                <input type="text"     placeholder="First Name" id="fname" name="fname" maxlength="20">
                <input type="text"     placeholder="Last Name"  id="sname" name="sname" maxlength="20">
                <input type="text"     placeholder="Username" id="user" name="user" maxlength="20">
                <input type="date"     placeholder="Date of Birth" id="bday" name="bday" value="2000-01-10">
                <input type="email"    placeholder="Email address" id="email" name="email">
                <input type="password" placeholder="Password" id="pass1" name="pass1" maxlength="20">
                <input type="password" placeholder="Re-Enter Password" id="pass2" name="pass2" maxlength="20">

            </form>

        </div>
    </body>
</html>

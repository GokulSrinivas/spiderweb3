
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="signupstyle.css">
        <script type="text/javascript" src="signup.js"></script>
        <script type="text/javascript" src="sha.js"></script>
    </head>
    <body>
        <div id="obox">

            <center><h1>Registration Form</h1></center>
            <form action="newuser.php" method="post" id="sform" enctype="multipart/form-data" onsubmit="return checkSize(2097152)">

                <input type="text"     placeholder="First Name" id="fname" name="fname" maxlength="20" required>
                <input type="text"     placeholder="Last Name"  id="sname" name="sname" maxlength="20" required>
                <input type="text"     placeholder="Username" id="user" name="user" maxlength="20" required>
                <input type="date"     placeholder="Date of Birth" id="bday" name="bday" value="2000-01-10" required>
                <input type="email"    placeholder="Email address" id="email" name="email" maxlength="50" required>
                <input type="password" placeholder="Password" id="pass1" name="pass1" maxlength="20" required>
                <input type="password" placeholder="Re-Enter Password" id="pass2" name="pass2" maxlength="20" required>
                <input type="text"     placeholder="Github Profile Link" id="ghub" name="ghub" maxlength="50">
                <br>
                <select id="sex" name="sex" required>
                    <option selected="selected">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <select id="dept" name="dept" required>

                    <option selected="selected">Department</option>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="ECE">Electronics and Communication Engineering</option>
                    <option value="EEE">Electrical and Electronics Engineering</option>
                    <option value="ICE">Instrumentation and Control Engineering</option>
                    <option value="MEC">Mechanical Engineering</option>
                    <option value="PRO">Production Engineering</option>
                    <option value="MET">Metallurgy and Materials Engineering</option>
                    <option value="CIV">Civil Engineering</option>
                    <option value="CHM">Chemical Engineering</option>
                </select>
                <input type="hidden" name="imgsize" value="204800">
                <input type="file" name="pic" id="pic" value="Profile Picture" accept=".png">
                <input type="button" id="dumb" value="Upload Profile Pic" onclick="document.getElementById('pic').click();">
                <textarea name="int" id="int" maxlength="100" placeholder="Your interests"></textarea>
                <input type="submit" name="checker" id="checker" style="opacity: 0;" value="done">
                <center><input type="button" value="Register" id="regb" onclick="fverify();"></center>

            </form>


        </div>
    </body>
</html>

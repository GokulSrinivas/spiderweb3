function verify()
{
    var fname = document.getElementById("fname");
    var sname = document.getElementById("sname");
    var user  = document.getElementById("user");
    var bday  = document.getElementById("bday");
    var email = document.getElementById("email");
    var pass1 = document.getElementById("pass1");
    var pass2 = document.getElementById("pass2");
    var sex   = document.getElementById("sex");
    var dept  = document.getElementById("dept");

    pass1 = toString(pass1);
    pass2 = toString(pass2);

    pass1 = CryptoJS.SHA1(pass1);
    pass2 = CryptoJS.SHA1(pass2);

    fname = ucase(fname);
    sname = ucase(sname);


    if(pass1.localeCompare(pass2)!==0)
    {
        document.getElementById("obox").innerHTML = " Passwords do not match!!. Please try again. <br> <a href=\"./signup.php\"> Signup!! </a>";
    }


}


function ucase(str)
{
    var p = str.split(" ");

    for ( var i = 0; i < p.length; i++ )
    {
        var j = p[i].charAt(0).toUpperCase();
        p[i] = j + p[i].substr(1);
    }
    return p.join(" ");
}


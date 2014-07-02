<html>
<head>
    <title>Welcome </title>
    <link rel="stylesheet" href="indexstyle.css" type="text/css">
    <style type="text/css">
    #lbut
    {
    position: absolute;

    width: 120px
    height: 80px;
    background-color: #3E5EA1;
    top: 0px;
    right: 0px;

    font-size: 20px;

    padding: 10px;

    border-style: solid;
    border-width: 2px;
    border-color: #293E6A;
    border-radius: 5px;

}

#lbut:hover
{
    border-color: #B5B5B5;
}
    </style>
</head>
<body>

<?php

session_start();

if(!$_SESSION['user'])
{
    header('Location: ./index.html');
}
$username = "gokul";
$password = "stein238";
$host = "localhost";


$db = mysql_connect($host,$username,$password)
        or die("Database Connection Failed");

$tab = mysql_select_db("spw3",$db)
        or die("Unexpected Problem. Please try again.");

$user = $_SESSION['user'];
$pass = $_SESSION['pass'];


$query = "SELECT * FROM user where user='$user' and pass='$pass'";
$result = mysql_query($query);

if(mysql_num_rows($result)==0)
{
    echo("Please Enter a valid username and password");
    exit;
}
else
{
    $fname = mysql_result($result,0,'fname');
    $sname = mysql_result($result,0,'sname');
    $img = mysql_result($result,0,'pic');

    echo("<img src=\"$img\" height=\"50\" width=\"50\"> ");
    echo("<h1> Welcome $fname $sname </h1>");

}
?>

<form method="post" action="logout.php">
    <input type=submit value="Logout" id="lbut">

</form>
</body>
</html>

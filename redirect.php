<?php

$option = $_POST['opt'];

if($option == 'Log In')
{
    header('Location: ./login.php');
}
else if( $option == 'Sign Up')
{
    header('Location: ./signup.php');
}
else
{
    header('Location: ./index.html');
}

?>

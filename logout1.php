<?php

session_start();
session_destroy();

header('Location:signin.php');
//after logout , if user go to the back page then it only stable to signin page untill your login 




?>
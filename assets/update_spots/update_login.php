<?php
    $password = $_POST['password'];
    
    if ($password === "kids2000") {
        include("update_form.html");
    }
    else {
        print "<script language = \"javascript\" type = \"text/javascript\">".
	   "alert('Password incorrect. Please try again.');".
	   "window.location = '../../update_login.html';".
	"</script>";
    die();
    }
?>
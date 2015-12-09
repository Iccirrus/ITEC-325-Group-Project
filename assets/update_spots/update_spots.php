<?php
    $server = "localhost";
    $user = "rockcl5_rockadmn";
    $pass = "kids2000";
    $db = "rockcl5_rockedit";

    $conn = new mysqli($server, $user, $pass, $db);

    $pre_spots = $conn->real_escape_string($_POST['pre_spots']);
    $pre_wait = $conn->real_escape_string($_POST['pre_wait']);
    $after_spots = $conn->real_escape_string($_POST['after_spots']);
    $after_wait = $conn->real_escape_string($_POST['after_wait']);
    $summer_spots = $conn->real_escape_string($_POST['summer_spots']);
    $summer_wait = $conn->real_escape_string($_POST['summer_wait']);

    if (isset($pre_spots)) {
        $update = "UPDATE reg_spots SET pre_spots='".$pre_spots."'";
        $conn->query($update);
    }
    if (isset($pre_wait)) {
        $update = "UPDATE reg_spots SET pre_wait='".$pre_wait."'";
        $conn->query($update);
    }
    if (isset($after_spots)) {
        $update = "UPDATE reg_spots SET after_spots='".$after_spots."'";
        $conn->query($update);
    }
    if (isset($after_wait)) {
        $update = "UPDATE reg_spots SET after_wait='".$after_wait."'";
        $conn->query($update);
    }
    if (isset($summer_spots)) {
        $update = "UPDATE reg_spots SET summer_spots='".$summer_spots."'";
        $conn->query($update);
    }
    if (isset($summer_wait)) {
        $update = "UPDATE reg_spots SET summer_wait='".$summer_wait."'";
        $conn->query($update);
    }

    $conn->close();

    include("update_done.html");
    die();
?>
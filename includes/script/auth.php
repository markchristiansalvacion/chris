<?php

/**
 * SESSION LOGIN AND LOGOUT FUNCTIONS
 */

function is_session_expired()
{
    $session_max_duration = 3153600000; // 10 years

    $current_time = time();



    if (isset($_SESSION['login_time']) && isset($_SESSION['id'])) {
        if (($current_time - $_SESSION['login_time']) > $session_max_duration) {

            return true;
        }
    }

    return false;
}

function is_login_auth()
{

    if (isset($_SESSION['id'])) {
        return true;
    }
    return false;
}

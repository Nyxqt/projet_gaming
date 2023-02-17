<?php

function getUser() {
    $user = ($_SESSION['username']);
    return $user;
}
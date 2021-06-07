<?php

if (str_contains(strtolower($_SERVER['HTTP_USER_AGENT']), 'office')) {
    echo 'This response is for office';
} else {
    $url = $_GET['url'];
    header("Location: $url");
}

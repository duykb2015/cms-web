<?php

function pre($data)
{
    echo '<pre>';
    print_r($data);
    die;
}

function cms_url($port = 8081)
{
    return "http://localhost:$port";
}



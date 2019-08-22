<?php

function render($path)
{
    include VIEW_PATH . '/' . $path;
}

function validator($data)
{
    if (isset($data['check']) && $data['check'])
        return true;
    else
        return false;
}
<?php

function controladorAutoload($nombre_clase)
{
    include 'controladores/'.$nombre_clase.'.php';
}

spl_autoload_register('controladorAutoload');
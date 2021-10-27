<?php
function esOpcionMenuActiva(string $option): bool
{
    if (strpos($_SERVER["REQUEST_URI"], "/".$option) === 0){
        return true;
    }elseif ($_SERVER["REQUEST_URI"] == '/' && $option == 'index'){
        return true;    
    }else
        return false;
}

function  existeOpcionMenuActivaEnArray(array $options): bool
{

    foreach ($options as $option){
        if (esOpcionMenuActiva($option)){
            return true;
        }else
        return false;

    }
}

function sanitizeInput(string $data): string 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function getAsociados(array $asociados) : array{

    if(sizeof($asociados)>3){
        shuffle($asociados);
        return array_slice($asociados, 0, 3);
    }else{
        return $asociados;
    }


}
<?php

function recogePost($var, $m ="")
{
    //isset devuelve false null
    if(!isset($_POST[$var])){
        //is_array 
        $tmp = (is_array($m)) ? [] : "";
    }elseif (!is_array($_POST[$var])){
        $tmp = trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8"));
    }else{
        $tmp = $_POST[$var];
        array_walk_recursive($tmp, function (&$valor)
        {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

function recogeGet($var, $m ="")
{
    //isset devuelve false null
    if(!isset($_GET[$var])){
        //is_array 
        $tmp = (is_array($m)) ? [] : "";
    }elseif (!is_array($_GET[$var])){
        $tmp = trim(htmlspecialchars($_GET[$var], ENT_QUOTES, "UTF-8"));
    }else{
        $tmp = $_GET[$var];
        //array_walk_recursive recorrer la matriz
        array_walk_recursive($tmp, function (&$valor)
        {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

function recogeRequest($var, $m ="")
{
    //isset devuelve false null
    if(!isset($_REQUEST[$var])){
        //is_array 
        $tmp = (is_array($m)) ? [] : "";
    }elseif (!is_array($_REQUEST[$var])){
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    }else{
        $tmp = $_REQUEST[$var];
        //array_walk_recursive recorrer la matriz
        array_walk_recursive($tmp, function (&$valor)
        {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}
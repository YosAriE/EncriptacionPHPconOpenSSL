<?php

function cifrado($datos)
{
    $password = 'ABCD-1234.aer';
    $metodo = 'AES-256-CBC';

    $ivSize = openssl_cipher_iv_length($metodo);
    $iv = openssl_random_pseudo_bytes($ivSize);
    $datosCifrados = openssl_encrypt($datos, $metodo, $password, OPENSSL_RAW_DATA, $iv);
    return base64_encode($iv . $datosCifrados);
}

function descifrar($datos) 
{
    $password = 'ABCD-1234.aer';
    $metodo = 'AES-256-CBC';

     $datos = base64_decode($datos);
     $ivSize = openssl_cipher_iv_length($metodo);


     $iv = substr($datos, 0, $ivSize);
     $datosCifrados = substr($datos, $ivSize);

     return openssl_decrypt($datosCifrados, $metodo, $password, OPENSSL_RAW_DATA, $iv);
}






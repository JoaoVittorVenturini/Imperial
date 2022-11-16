<?php
// Validaçõo do CPF

$CPF = '012.212.123-32';
$regexCPF = '/[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}/';

if(preg_match($regexCPF, $CPF)){
    echo 'CPF válido <br>';
} else {
    echo 'CPF inválido <br>';
};

// Validação do E-mail

$email = 'joaovittorventurini@gmail.com';
$regexEmail = '/^[A-Za-z0-9.\-\_]{3,}+@[a-z0-9]{3,}+.(com|com.br|edu.br)$/';
if(preg_match($regexEmail, $email)){
    echo 'E-mail válido <br>';
} else {
    echo 'E-mail inválido <br>';
};

// Validação do Telefone

$telefone = '(11) 9 9999-9999';
$regexTelefone = '/^\(?[0-9]{2}+\)? ?[9] ?[0-9]{4}+\-?+[0-9]{4}$/';
if(preg_match($regexTelefone, $telefone)){
    echo 'Telefone válido <br>';
} else {
    echo 'Telefone inválido <br>';
};

// Validação de Senha

$senha = 'fSADasdDW';
$regexSenha = '/^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{10,}$/';
if(preg_match($regexSenha, $senha)){
    echo 'Senha válida <br>';
} else {
    echo 'Senha inválida <br>';
};

?>
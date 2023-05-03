<?php


// $password = readline("Inserici una password: ");

// NUMERO CARATTERI //

function checkLength($password){
    if (strlen($password)>= 8){
        return true;
    }
    echo "La password deve essere lunga 8 o più caratteri \n";
    return false;
}
// checkLenght($password);
// NUMERI NELLA PSW //

function checkNumber($password){
    for ($i=0; $i < strlen($password); $i++){ 
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    echo "E' necessario almeno un numero \n";
    return false;
}
// checkNumber($password);
// MAIUSCOLE //

function checkUpper($password){
    for ($i=0; $i < strlen($password); $i++){ 
        if (ctype_upper($password[$i])){
            return true;
        }
    }
    echo "E' necessario almeno un carettere in maiuscolo \n";
    return false;
}
// checkUpper($password);

// CARATTERI SPECIALI //

function checkSpecial($password){
    $specialChars = ["!","£","@","#"];

        for($i = 0; $i < strlen($password); $i++){
        if(in_array($password[$i], $specialChars)){
            return true;
        }
    }
    echo "E' necessario almeno un carattere speciale \n";
    return false;
}
// checkSpecial($password);

function checkPassword (){

    $password = readline("Inserici una password: ");

     if(checkLength($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)){
        echo "Password corretta \n";
        return true;
    } else {
        echo "Riprova! \n";
        return false;
    }
}
$passwordValid = false;

do{
    $passwordValid = checkPassword();
} while ($passwordValid == false);
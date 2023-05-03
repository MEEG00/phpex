<?php




// NUMERO CARATTERI //

function checkLength($password){
    if (strlen($password)>= 8){
        return true;
    }
    echo "La password deve essere lunga 8 o più caratteri \n";
    return false;
}
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
$counter = 0;


do{
    $passwordValid = checkPassword();
    $tentativi = 2 - $counter;
        if ($passwordValid == false) {
        $counter++;
    }
        if ($counter == 1) {
        echo "Ti rimangono $tentativi tentativi \n"; 
    }
        else if ($counter == 2) {
        echo "Ti rimane $tentativi tentativo \n"; 
    }
        else if ($counter == 3) {
        echo "Hai superato i tentativi massimi \n"; 
    }
} while ($passwordValid == false && $counter < 3);

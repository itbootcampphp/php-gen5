<?php

function textValidation($text){
    if(empty($text)){
        return "Enter value";
    }
    elseif(ctype_alpha(str_replace(' ', '', $text))==false && preg_match('/[ĐđŽžĆćČčŠš]/m',$text)==false){
        return "The field can only contains letters and spaces";
    }
    elseif(strlen($text) > 50){
        return "Field must be less than 50 characters";
    }
    else{
        return false; //Ako je sve kako treba
    }
}

function dobValidation($dob){
    if(empty($dob)){
        return false; //Sme da bude prazno
    } 
    elseif($dob < "1900-01-01"){
        return "Dates are available after 1900-01-01";
    } 
    else {
        return false;
    }
}

function usernameValidation($username, $conn){
    $q = "SELECT `username`
          FROM `users`
          WHERE `username` LIKE '$username'";

    $result = $conn->query($q);

    if(empty($username)){
        return "Enter value";
    }
    elseif(preg_match('/\s/',$username)){
        return "Username must not contain spaces";
    }
    elseif($result->num_rows) {
        return "The username you entered already exists";
    }
    elseif(strlen($username) < 5 || strlen($username) > 50){
        return "Username must be between 5 and 50 characters";
    }
    else{
        return false;
    }
}

function passwordValidation($pass){
    if(empty($pass)){
        return "Enter value";
    }
    elseif(preg_match('/\s/',$pass)){
        return "Password must not contain blanks";
    }
    elseif(strlen($pass) < 5 || strlen($pass) > 25){
        return "Password must be between 5 and 25 characters";
    }
    else{
        return false;
    }
}


?>
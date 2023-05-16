<?php
    $requiredFields = ["firstName", "lastName", "email", "confirmEmail", "password", "confirmPassword", "birthday", "city_id"];

    $errors{} = "";
    foreach($requiredFields => $key => $value){
        if(empty($_POST[$value])){
            $errors[] = "Window <b>$value</b> is required";
        }
    }

    $_SESSION('error_message') = implode($errors);
    echo $_SESSION('error_message');
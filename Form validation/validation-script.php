<?php

$valid=$fnameErr=$lnameErr=$emailErr=$passErr=$cpassErr="";

$set_firstName=$set_lastName=$set_email="";

extract($_POST);

if(isset($_POST['register']))
{
    $validName="/^[a-zA-Z ]*$/";
    $validEmail="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $uppercasePassword="/(?=.*?[A-Z])/";
    $lowercasePassword="/(?=.*?[a-z])/";
    $digitsPassword="/(?=.*?[0-9])/";
    $spacesPassword="/^$|\s+/";
    $symbolPassword="/(?=.*?[#$? !@%^&*-])/";
    $min8Password="/.{8,}/";

    if(empty($first_name)){
        $fnameErr="Enter the first name- mandatory";
    }
    else if(!preg_match($validName,$first_name)){
        $fnameErr="Digits or symbols not allowed.";
    }
    else{
        $fnameErr = true;
    }

    if(empty($last_name)){
        $lnameErr="Enter the last name- mandatory";
    }
    else if(!preg_match($validName,$last_name)){
        $lnameErr="Digits or symbols not allowed.";
    }
    else{
        $lnameErr=true;
    }

    if(empty($email)){
        $emailErr="enter email address- mandatory";
    }
    else if(!preg_match($validEmail,$email))
    {
        $emailErr="invalid email address";
    }

    if(empty($password)){
        $passErr="Password is mandatory";
    }
    else if(!preg_match($uppercasePassword,$password)||(!preg_match($lowercasePassword,$password))||(!preg_match($digitsPassword,$password))||(preg_match($spacesPassword,$password))||(!preg_match($symbolPassword,$password))||(!preg_match($min8Password,$password)))
    {
        $passErr="Password must contain atleast 1 uppercase letter, lowercase letter, digits, symbols and it should of minimum 8 characters with no spaces.";
    }
    else{
        $passErr=true;
    }

    if($cpassword!=$password){
        $cpassErr="Confirm password does not match with the above password.";
    }
    else{
        $cpassErr=true;
    }

    if($fnameErr==1 && $lnameErr==1 && $emailErr==1 && $passErr==1 && $cpassErr==1){
        $valid="All fields are validated successfully.";

    $firstName= checking_input($first_name);
    $lastName=checking_input($last_name);
    $email=checking_input($email);
    $password=checking_input($password);

    }
    else{
        $set_firstName=$first_name;
        $set_lastName=$last_name;
        $set_email=$email;
    }

    function checking_input($value){
        $value=trim($value);
        $value=stripcslashes($value);
        $value=htmlspecialchars($value);

        return $value;
    }

}

?>
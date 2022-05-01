<?php
    require_once 'includes/connect.php';//for var $conn

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $insurance = $_POST['insurance'];
    $ssn = $_POST['ssn'];
    $sex = $_POST['sex'];
    $addresse = $_POST['address'];
    $age = $_POST['age'];
    $dateOfBirth = $_POST['dob'];
    $phoneNumber = $_POST['phoneNum'];



    $sql = "INSERT INTO patient (nom, prenom, sexe, assurance, adresse, e_mail, date_de_naissance, SSN, numeros_de_telephones, age)
        VALUES ($firstName, $lastName, $sex, $insurance, $addresse, $email, $dateOfBirth, $ssn, $phoneNumber, $age)";
    
    $res = pg_query($conn,$sql);

    if($res){
        echo "Saved";
    }
    
?>
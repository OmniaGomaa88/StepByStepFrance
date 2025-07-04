<?php
include '../core/Database.php';

//verifier si le method post et executé 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //créer des variables avec les valeurs entrées
    // par l'utilisateu par le form
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //password chiffrée
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $residence_type = $_POST['residence_type'];


    // le requete sql
    $req = $connect_database->prepare(" INSERT INTO users (email,password,name,gender,age,residence_type)
     VALUES(?,?,?,?,?,?)");
    $req->bind_param("ssssis", $email, $password, $name, $gender, $age, $residence_type);


    if ($req->execute()) {
        echo "compt créé avec succès";
    } else {
        echo "Erreur : " . $req->error;
    }
}

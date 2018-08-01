<?php
// define variables and set to empty values
$genderErr = $lastNameErr = $firstNameErr = $emailErr = $objectErr = $messageErr = $documentErr = $formatErr = "";
$gender = $lastName = $firstName = $email = $object = $message = $document = $format = "";

//people informations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
      $genderErr = "Veuillez sélectionner votre titre ";
    } else {
      $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["lastName"])) {
      $lastNameErr = "Veuillez indiquer votre nom de famille";
    } else {
      $lastName = test_input($_POST["lastName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
        $lastNameErr = "Seules les lettres (a-z) sont autorisées";
      }
    }

    if (empty($_POST["firstName"])) {
      $firstNameErr = "Veuillez indiquer votre prénom";
    } else {
      $firstName = test_input($_POST["firstName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
        $firstNameErr = "Seules les lettres (a-z) sont autorisées";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Veuillez indiquer votre adresse email";
    } else {
      $email = test_input($_POST["email"]);
      // check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Votre adresse email n'est pas valide";
      }
    }

    if (empty($_POST["object"])) {
      $objectErr = "Veuillez sélectionner un sujet";
    } else {
      $object = test_input($_POST["object"]);
    }


    if (empty($_POST["message"])) {
      $messageErr = "Merci de laisser un message";
    } else {
      $message = test_input($_POST["message"]);
      // check if message only contains letters and whitespace
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$message)) {
        $messageErr = "Seules les lettres (a-z) sont autorisées";
      }
    }

}
}
 ?>

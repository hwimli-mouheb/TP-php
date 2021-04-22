<?php
session_start();
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$name = $_POST['newname'];
$firstname = $_POST["newfirstname"];
$age = $_POST['newage'];
$job = $_POST['newjob'];

$person=$personneRepository-> findByName($name);



if (($name)&&($firstname)&&($age)&&($job)) {

    if($person){
        $_SESSION['addError']="Veuillez vérifier l'unicite de name";
        header('location:addPerson.php');
    }else{
    $message=$personneRepository->insert($name,$age,$job,$firstname);
    header('location:home.php');}
} else {
    $_SESSION['addError']="Veuillez vérifier vos donnees";
    header('location:addPerson.php');

}
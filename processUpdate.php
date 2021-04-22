<?php
session_start();
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$name = $_GET['name'];
$firstname = $_GET["firstname"];
$age = $_GET['age'];
$job = $_GET['job'];





if (($name)&&($firstname)&&($age)&&($job)) {
    $message=$personneRepository->updateByName($name,$firstname,$job,$age,$_SESSION['updateElement']);

    unset($_SESSION['updateElement']);
    header('location:home.php');
} else {
    $_SESSION['updateError']="Veuillez vérifier vos donnees";
    header('location:updatePersonne.php');
}
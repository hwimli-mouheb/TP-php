<?php
include_once 'autoload.php';
$name = $_GET['name'];
echo $name;
$personneRepository = new PersonneRepository();
$personne = $personneRepository->deleteByName($name);
header('location:home.php');
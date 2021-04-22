<?php
include_once 'isAuthenticated.php';
$pageTitle = 'updateData';


include_once 'fragments/header.php';
if(isset($_SESSION['updateError']))
?>
<?php
if (isset($_SESSION['updateError'])) {

    ?>
    <div class="alert alert-danger">
        <?= $_SESSION['updateError'] ?>
    </div>
    <?php
    unset($_SESSION['updateError']);


}
include_once 'autoload.php';

if(isset($_GET["selected"])) {
    $_SESSION['updateElement'] = $_GET["selected"];
}



$personneRepository = new PersonneRepository();
$person=$personneRepository->findByName($_SESSION['updateElement']);
if(!$person){
    header("location:home.php");
} //interdire le retour de home vers le formulaire de mise a jour

?>
<div class="container">
    <form action="processUpdate.php" method="get">

            <div class="col">
                <label for="firstname">Firstname</label>
                <input type="text" value=<?= $person->firstname?>
                class="form-control" name="firstname" id="firstname" placeholder="First name">
            </div>
            <div class="col">
                <label for="name">Name</label>
                <input type="text"  value=<?= $person->name?>
                id="name" name="name" class="form-control" placeholder="name">

            </div>
        <div class="row">
            <div class="col">
                <label for="age">Age</label>
                <input type="number" id="age" value=<?= $person->age?>
                name="age" class="form-control" placeholder="age">
            </div>
            <div class="col">
                <label for="job">Job</label>
                <input type="text" id="job" value=<?= $person->job?>
                name="job" class="form-control" placeholder="name">
            </div>
        </div>
        <button type="submit b" class="btn btn-primary">Submit Changes</button>
    </form>

<?php

    ?>
</div>
</body>
</html>

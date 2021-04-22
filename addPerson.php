<?php
include_once 'isAuthenticated.php';
$pageTitle = 'addData';


include_once 'fragments/header.php';
if(isset($_SESSION['addError']))
    ?>
    <?php
if (isset($_SESSION['addError'])) {

    ?>
    <div class="alert alert-danger">
        <?= $_SESSION['addError'] ?>
    </div>
    <?php
    unset($_SESSION['addError']);


}
include_once 'autoload.php';

?>
<div class="container">
    <form action="processAdd.php" method="post">

        <div class="col">
            <label for="firstname">Firstname</label>
            <input type="text"
            class="form-control" name="newfirstname" id="firstname" placeholder="First name">
        </div>
        <div class="col">
            <label for="name">Name</label>
            <input type="text"
            id="name" name="newname" class="form-control" placeholder="name">

        </div>
        <div class="row">
            <div class="col">
                <label for="age">Age</label>
                <input type="number" id="age"
                name="newage" class="form-control" placeholder="age">
            </div>
            <div class="col">
                <label for="job">Job</label>
                <input type="text" id="job"
                name="newjob" class="form-control" placeholder="job">
            </div>
        </div>
        <button type="submit o" class="btn btn-primary">ADD</button>
    </form>

    <?php

    ?>
</div>
</body>
</html>

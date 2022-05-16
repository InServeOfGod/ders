<?php
include_once "init.php";
include_once "header.php";

session_start();

if (isset($_POST['counter'])) {
    if (isset($_POST['plus'])) {
        $_SESSION['counter']++;
    }

    if (isset($_POST['minus'])) {
        $_SESSION['counter']--;
    }

    if (isset($_POST['reset'])) {
        $_SESSION['counter'] = 0;
    }

    if (isset($_POST['plus5'])) {
        $_SESSION['counter']+=5;
    }

    if (isset($_POST['minus5'])) {
        $_SESSION['counter']-=5;
    }
}
?>

<style>
    body {
        background-image: url("../img/thumb-1920-210356.jpg");
    }

    footer {
        display: none;
    }
</style>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="container">
    <div class="row my-3 align-items-center justify-content-center">
        <div class="col-md-4">
            <label for="counter"></label>
            <input type="text" id="counter" name="counter" class="form-control" value="<?php echo $_SESSION['counter']?>">

            <div class="ms-auto my-3">
                <input type="submit" class="btn btn-success border" value="Arttır" name="plus">
                <input type="submit" class="btn btn-danger border" value="Azalt" name="minus">
                <input type="submit" class="btn btn-info border" value="Arttır (+5)" name="plus5">
                <input type="submit" class="btn btn-secondary border" value="Azalt (-5)" name="minus5">
                <input type="submit" class="btn btn-dark text-white border" value="Sıfırla" name="reset">
            </div>
        </div>
    </div>
</form>

<?php
include_once "footer.php";

<?php
include_once "init.php";
include_once "header.php"
?>

<main class="container-fluid p-0">
    <h1 class="fw-bold text-warning py-3 text-center">Güneş Tekstil</h1>
    <hr><hr>

    <div class="container">
        <h3 class="text-secondary">Başvuru Formu</h3>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="container form-control p-4">
        <div class="input-group mb-3">
            <label class="form-label col-2" for="no">Nosu : </label>
            <input type="text" class="form-control col-10" name="no" id="no">
        </div>

        <div class="input-group mb-3">
            <label class="form-label col-2" for="name">Adı :</label>
            <input type="text" class="form-control col-10" name="name" id="name">
        </div>

        <div class="input-group mb-3">
            <label class="form-label col-2" for="surname">Soyadı :</label>
            <input type="text" class="form-control col-10" name="surname" id="surname">
        </div>

        <div class="input-group mb-3">
            <label class="form-label col-2" for="address">Adres :</label>
            <textarea name="address" class="form-control col-10" id="address"></textarea>
        </div>

        <div class="input-group mb-3">
            <label class="form-label col-2" for="soldiering">Askerlik Durumu :</label>
            <select class="form-control form-select ms-3 col-10" name="soldiering" id="soldiering">
                <option value="1">Yaptı</option>
                <option value="2">Tecilli</option>
                <option value="3">Muaf</option>
            </select>
        </div>

        <label class="input-group mb-3">
            Eğitim Durumu :

            <label class="form-label input-group">
                <input type="radio" name="school" id="ElementarySchool" class="form-check-input me-1" value="1">
                İlkokul
            </label>

            <label class="form-label input-group">
                <input type="radio" name="school" id="MiddleSchool" class="form-check-input me-1" value="2">
                Ortaokul
            </label>

            <label class="form-label input-group">
                <input type="radio" name="school" id="HighSchool" class="form-check-input me-1" value="3">
                Lise
            </label>

            <label class="form-label input-group">
                <input type="radio" name="school" id="University" class="form-check-input me-1" value="4">
                Üniversite
            </label>
        </label>

        <label class="input-group mb-3">
            Yabancı Dil :

            <label class="form-label input-group">
                <input type="checkbox" name="en" id="English" value="ingilizce" class="form-check-input me-1">
                İngilizce
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="de" id="German" value="almanca" class="form-check-input me-1">
                Almanca
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="ar" id="Arabic" value="arapça" class="form-check-input me-1">
                Arapça
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="hw" id="Hebrew" value="ibranice" class="form-check-input me-1">
                İbranice
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="ru" id="Russian" value="rusça" class="form-check-input me-1">
                Rusça
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="fr" id="French" value="fransızca" class="form-check-input me-1">
                Fransızca
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="it" id="Italian" value="italyanca" class="form-check-input me-1">
                İtalyanca
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="ko" id="Korean" value="korece" class="form-check-input me-1">
                Korece
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="zh" id="Chinese" value="çince" class="form-check-input me-1">
                Çince
            </label>

            <label class="form-label input-group">
                <input type="checkbox" name="ja" id="Japanese" value="japonca" class="form-check-input me-1">
                Japonca
            </label>
        </label>

        <input type="submit" value="Başvur" class="form-control btn btn-success btn-lg">
    </form>
</main>

<?php

$no = $_REQUEST['no'] ?? null;
$name = $_REQUEST['name'] ?? null;
$surname = $_REQUEST['surname'] ?? null;
$address = $_REQUEST['address'] ?? null;
$soldiering = $_REQUEST['soldiering'] ?? null;
$school = $_REQUEST['school'] ?? null;
$en = $_REQUEST['en'] ?? null;
$de = $_REQUEST['de'] ?? null;
$ar = $_REQUEST['ar'] ?? null;
$hw = $_REQUEST['hw'] ?? null;
$ru = $_REQUEST['ru'] ?? null;
$fr = $_REQUEST['fr'] ?? null;
$it = $_REQUEST['it'] ?? null;
$ko = $_REQUEST['ko'] ?? null;
$zh = $_REQUEST['zh'] ?? null;
$ja = $_REQUEST['ja'] ?? null;
$languages = [$en, $de, $ar, $hw, $ru, $fr, $it, $ko, $zh, $ja];

?>

<div class="container border p-3 my-3">
    <div class="container mb-1">
        <span>no : </span>
        <span><?php echo $no?></span>
    </div>

    <div class="container mb-1">
        <span>isim : </span>
        <span><?php echo $name?></span>
    </div>

    <div class="container mb-1">
        <span>adres : </span>
        <span><?php echo $address?></span>
    </div>

    <div class="container mb-1">
        <span>askerlik : </span>
        <span><?php echo $soldiering?></span>
    </div>

    <div class="container mb-1">
        <span>okul : </span>
        <span><?php echo $school?></span>
    </div>

    <div class="container mb-1">
        <span>yabancı diller : </span>

        <table class="table table-striped table-bordered table-hover my-1">
            <?php

            foreach ($languages as $language) {
                if ($language == null) {
                    continue;
                }
                ?>
                <tr>
                    <td>
                        <?php echo $language; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

<?php
include_once "footer.php"
?>
